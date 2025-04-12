<template>
    <div class="container-fluid">
        <div class="container col-8">
            <div class="col-12 py-5">
                <div
                    v-if="data.msg !== null"
                    class="alert alert-success alert-dismissible fade show"
                    role="alert"
                >
                    {{ data.msg }}
                    <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form
                    @submit.prevent="updateContent"
                    class="col-12"
                    action=""
                    method="POST"
                >
                    <div
                        v-for="(content, index) in data.contents"
                        :key="index"
                        class="mb-3 col-12"
                    >
                        <div class="p-3 bg-white rounded">
                            <div v-if="content.type == 'text'">
                                <label for="" class="form-label">{{
                                    content.key
                                }}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    :name="content.key"
                                    v-model="content.value"
                                    id=""
                                    aria-describedby="helpId"
                                    placeholder=""
                                    :value="content.value"
                                    required
                                />
                            </div>
                            <div v-else>
                                <label for="" class="form-label">{{
                                    content.key
                                }}</label>
                                <ckeditor
                                    v-if="editor"
                                    :name="content.key"
                                    v-model="content.value"
                                    :editor="editor"
                                    :config="config"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mb-5">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios";

import { onMounted, reactive, defineProps, ref, computed } from "vue";
import { Ckeditor, useCKEditorCloud } from "@ckeditor/ckeditor5-vue";

const props = defineProps({
    contents: {
        required: true,
    },
});
const data = reactive({
    contents: [],
    msg: null,
});
// const refrence = ref("<p>Hello world!</p>");
const cloud = useCKEditorCloud({
    version: "44.1.0",
    premium: true,
});

const updateContent = async () => {
    const payload = {};
    data.contents.forEach((element) => {
        payload[element.key] = element.value;
    });
    await axios.post("/admin/change/content/update", payload).then((res) => {
        data.msg = "Content updated successfully";
    });
};

onMounted(() => {
    data.contents = props.contents;
});

const editor = computed(() => {
    if (!cloud.data.value) {
        return null;
    }

    return cloud.data.value.CKEditor.ClassicEditor;
});

const config = computed(() => {
    if (!cloud.data.value) {
        return null;
    }

    const { Essentials, Paragraph, Bold, Italic } = cloud.data.value.CKEditor;
    const { FormatPainter } = cloud.data.value.CKEditorPremiumFeatures;

    return {
        licenseKey:
            "eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Mzc1OTAzOTksImp0aSI6ImVhM2FiMTI5LTZlNTAtNGUwNi1iYzhiLWMwMzJkYTI4ZjA3MCIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6ImMxM2FiMWU2In0.EuuJ86Lhl1FjYvvXPww8GrYFHq09M5lwGbDcUykxC_isd6QTNJcU7Vp4lw5jiheGnw8ND87bz9YW2J7erESMig",
        plugins: [Essentials, Paragraph, Bold, Italic, FormatPainter],
        toolbar: ["undo", "redo", "|", "bold", "italic", "|", "formatPainter"],
    };
});
</script>

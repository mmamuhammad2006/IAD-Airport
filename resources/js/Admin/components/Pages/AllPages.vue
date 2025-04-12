<template>
    <div class="container-fluid py-5 p-0">
        <div class="m-auto">
            <div class="col-12 p-0">
                <div class="table-cont px-5">
                    <div class="col-12 bg-white p-3 rounded-4">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="bg-white" scope="col">#</th>
                                    <th class="bg-white" scope="col">Title</th>
                                    <th
                                        class="bg-white text-center"
                                        scope="col"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bg-white py-3">1</td>
                                    <td class="bg-white py-3">Home</td>
                                    <td class="bg-white py-3 text-center">
                                        <a
                                                    class="btn btn-primary"
                                                    href="/admin/change/content/edit/home"
                                                    >Edit</a
                                                >
                                        <!-- <div class="btn-group">
                                            <button
                                                type="button"
                                                class="btn bg-cyan rounded"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                            >
                                                <i
                                                    class="fa-solid fa-ellipsis-vertical text-white border-0 border-active-none"
                                                ></i>
                                            </button>
                                            <div
                                                class="dropdown-menu shadow bg-white border-0"
                                            >
                                                <a
                                                    class="dropdown-item"
                                                    href="/admin/change/content/edit/{home}"
                                                    >Edit</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Show</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Delete</a
                                                >
                                            </div>
                                        </div> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup></script>

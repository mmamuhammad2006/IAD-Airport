<template>
    <div class="spinner-overlay">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</template>
<style>
.spinner-overlay {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}
.spinner-border {
    color: #5db5bb !important;
}
</style>

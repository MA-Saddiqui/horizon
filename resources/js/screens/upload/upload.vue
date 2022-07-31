<script type="text/ecmascript-6">
    import _ from 'lodash';
    import moment from 'moment';
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    export default {
    name: 'app',
    components: {
        vueDropzone: vue2Dropzone
    },
    data: function () {
            return {
                dropzoneOptions: {
                    url: Horizon.basePath + '/api/upload',
                    thumbnailWidth: 150,
                    acceptedFiles: ".zip",
                    maxFilesize: 1024,
                    headers: {
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                }
            }
        },
    methods : {
        uploadComplete: function () {
            this.$router.push({ name: 'batches' })
        }
    }
    }
</script>

<template>
    <div>
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Upload Zip</h5>
            </div>

            <div class="card-bg-secondary">
                <div class="card-body">
                    <vue-dropzone ref="myVueDropzone" @vdropzone-success="uploadComplete()" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
                </div>

            </div>
        </div>


    </div>
</template>

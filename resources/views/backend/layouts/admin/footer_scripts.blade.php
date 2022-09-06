<!-- Dashboard js -->
<script src="{{asset('backend/assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/vendors/selectize.min.js')}}"></script>
<script src="{{asset('backend/assets/js/vendors/circle-progress.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<!-- Fullside-menu Js-->
<script src="{{asset('backend/assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>


<!-- Data tables -->
<script src="{{asset('backend/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/assets/js/datatable.js')}}"></script>

<!-- Select2 js -->
<script src="{{asset('backend')}}/assets/plugins/select2/select2.full.min.js"></script>

<!-- p-scroll bar Js-->
<script src="{{asset('backend/assets/plugins/pscrollbar/pscrollbar.js')}}"></script>
<script src="{{asset('backend/assets/plugins/pscrollbar/pscroll.js')}}"></script>

<!--Counters -->
<script src="{{asset('backend/assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('backend/assets/plugins/counters/waypoints.min.js')}}/"></script>


<!-- Custom Js-->
<script src="{{asset('backend/assets/js/admin-custom.js')}}"></script>
<script>
    var uploadedDocumentMap = {}
    Dropzone.options.dpzMultipleFiles = {
        paramName: "dzfile", // The name that will be used to transfer the file
        //autoProcessQueue: false,
        maxFilesize: 5, // MB
        clickable: true,
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
        dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
        dictCancelUpload: "Cancel Upload ",
        dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
        dictRemoveFile: "Delete Image",
        dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
        headers: {
            'X-CSRF-TOKEN':
                "{{ csrf_token() }}"
        }
        ,
        url: "{{ route('album.save.image') }}", // Set the url
        success:
            function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            }
        ,
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="document[]"][value="' + name + '"]').remove()
        }
        ,
        // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
        init: function () {
            @if(isset($event) && $event->document)
            var files =
                {!! json_encode($event->document) !!}
                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
            }
            @endif
        }
    }
</script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<script src="{{ asset('vendors/js/core.js') }}"></script>
<script src="{{ asset('vendors/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('js/charts/chartjs.addon.js') }}"></script>
<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        });
</script>
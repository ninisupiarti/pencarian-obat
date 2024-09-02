<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-start">
                <script>
                    document.write(new Date().getFullYear())
                </script> © {{ env('APP_NAME') }}
            </div>
            <div class="col-6 d-none d-lg-block text-end">
                @lang('admin/template.footer.copyright')
            </div>
        </div>
    </div>
</footer>

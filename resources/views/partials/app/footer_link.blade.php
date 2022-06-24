<!-- JS here -->
<script src="{{ asset('app/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('app/js/popper.min.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('app/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('app/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('app/js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('app/js/jquery.appear.js') }}"></script>
<script src="{{ asset('app/js/slick.min.js') }}"></script>
<script src="{{ asset('app/js/ajax-form.js') }}"></script>
<script src="{{ asset('app/js/wow.min.js') }}"></script>
<script src="{{ asset('app/js/aos.js') }}"></script>
<script src="{{ asset('app/js/plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>


<!-- Validation Links-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> 
<script>  
    $(document).ready(function () {  
        $("#validateUser").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
                password_confirmation: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Name",
                },
                email: {
                    required: "Please Enter email",
                },                
                password: {
                    required: "Please Enter Password",
                },
                confirm_password: {
                    required: "Please Enter Confirm Password",
                },
            },
        });
    });
</script>
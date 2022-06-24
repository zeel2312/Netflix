<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" ></script>
<!-- Bootstrap -->
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" ></script>
<!-- FastClick -->
<script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}" ></script>
<!-- NProgress -->
<script src="{{ asset('vendors/nprogress/nprogress.js') }}" ></script>
<!-- Chart.js -->
<script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}" ></script>
<!-- gauge.js -->
<script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}" ></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}" ></script>
<!-- iCheck -->
<script src="{{ asset('vendors/iCheck/icheck.min.js') }}" ></script>
<!-- Skycons -->
<script src="{{ asset('vendors/skycons/skycons.js') }}" ></script>
<!-- Flot -->
<script src="{{ asset('vendors/Flot/jquery.flot.js') }}" ></script>
<script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}" ></script>
<script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}" ></script>
<script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}" ></script>
<script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}" ></script>
<!-- Flot plugins -->
<script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}" ></script>
<script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}" ></script>
<script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}" ></script>
<!-- DateJS -->
<script src="{{ asset('vendors/DateJS/build/date.js') }}" ></script>
<!-- JQVMap -->
<script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}" ></script>
<script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}" ></script>
<script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}" ></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('vendors/moment/min/moment.min.js') }}" ></script>
<script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}" ></script>

<!-- morris.js -->
<script src="{{ asset('vendors/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('vendors/morris.js/morris.min.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('js/custom.js') }}" ></script>

<!-- Dropify Image Uploader Theme Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();
    });
</script>

<!-- Datatable Links-->
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
<script>
    $(document).ready( function () {
        $('#allusers').DataTable();
        $('#allPlans').DataTable();
        $('#allCategories').DataTable();
        $('#allSubCategories').DataTable();
        $('#allVideos').DataTable();
        $('#allSettings').DataTable();
    });
</script>

<!-- Validation Links-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> 
<script>  
    $(document).ready(function () {  
        $("#adduser").validate({
            rules: {
                name: {
                    required: true,
                },
                date_of_birth: {
                    required: true,
                },
                address_line1: {
                    required: true,
                },
                address_line2: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                zipcode: {
                    required: true,
                },
                mobile_no: {
                    required: true,
                },
                email: {
                    required: true,
                },
                password: {
                    required: true,
                },
                confirm_password: {
                    required: true,
                },
                profile_image: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Name",
                },
                date_of_birth: {
                    required: "Please Enter Date Of Birth",
                },
                address_line1: {
                    required: "Please Enter Address Line 1",
                },
                address_line2: {
                    required: "Please Enter Address Line 2",
                },
                city: {
                    required: "Please Enter City",
                },
                state: {
                    required: "Please Enter State",
                },
                zipcode: {
                    required: "Please Enter Zipcode",
                },
                mobile_no: {
                    required: "Please Enter Mobile Number",
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
                profile_image: {
                    required: "Please Upload Image",
                },
            },
        });
        $("#edituser").validate({
            rules: {
                name: {
                    required: true,
                },
                date_of_birth: {
                    required: true,
                },
                address_line1: {
                    required: true,
                },
                address_line2: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                zipcode: {
                    required: true,
                },
                mobile_no: {
                    required: true,
                },
                email: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Name",
                },
                date_of_birth: {
                    required: "Please Enter Date Of Birth",
                },
                address_line1: {
                    required: "Please Enter Address Line 1",
                },
                address_line2: {
                    required: "Please Enter Address Line 2",
                },
                city: {
                    required: "Please Enter City",
                },
                state: {
                    required: "Please Enter State",
                },
                zipcode: {
                    required: "Please Enter Zipcode",
                },
                mobile_no: {
                    required: "Please Enter Mobile Number",
                },
                email: {
                    required: "Please Enter email",
                },                
            },
        });
        $("#updateAdmin").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                mobile: {
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
                mobile: {
                    required: "Please Enter Mobile Number",
                },               
            },
        });
        $("#changePassword").validate();
        $("#addPlan").validate({
            rules: {
                name: {
                    required: true,
                },
                price: {
                    required: true,
                },
                no_of_devices: {
                    required: true,
                },
                description: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Plan Name",
                },
                price: {
                    required: "Please Enter Plan Price",
                }, 
                no_of_devices: {
                    required: "Please Enter Number Of Devices",
                },               
                description: {
                    required: "Please Enter Description",
                }
            },
        });

        $("#addCategory").validate({
            rules: {
                name: {
                    required: true,
                    remote: {
                        url: "{{ route('admin.checkCategorya') }}",
                        type: "post",
                        data:{
                            id : function() {
                                return $('#category_id').val()
                            },
                        },    
                    },
                },
                priority: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please Enter Category Name",
                    remote: "Category already Exists",
                },
                priority: {
                    required: "Please Enter Priority",
                },
            },
        });

        $("#addSubCategory").validate({
            rules: {
                category_id: {
                    required: true,
                },
                name: {
                    required: true,
                    remote: {
                        url: "{{ route('admin.checkSubCategory') }}",
                        type: "post",
                        data:{
                            id : function() {
                                return $('#subcategory_id').val()
                            },
                        }   
                    }
                },
                priority: {
                    required: true,
                },
                description: {
                    required: true,
                },
            },
            messages: {
                category_id: {
                    required: "Please Enter Category ID",
                },
                name: {
                    required: "Please Enter Sub-Category Name",
                    remote: "Sub-Category already Exists",
                },
                priority: {
                    required: "Please Enter Priority",
                },
                description: {
                    required: "Please Enter Description",
                },
            },
        });

        $("#addVideo").validate({
            rules: {
                category_id: {
                    required: true,
                },
                subcategory_id: {
                    required: true,
                },
                name: {
                    required: true,
                },
                duration: {
                    required: true,
                },
                cast: {
                    required: true,
                },
                director: {
                    required: true,
                },
                year: {
                    required: true,
                },
                video: {
                    required: true,
                },
                description: {
                    required: true,
                },
            },
            messages: {
                category_id: {
                    required: "Please Enter Category Name",
                },
                subcategory_id: {
                    required: "Please Enter Sub-Category Name",
                },
                name: {
                    required: "Please Enter Name",
                },
                duration: {
                    required: "Please Enter Duration",
                },
                cast: {
                    required: "Please Enter Cast",
                },
                director: {
                    required: "Please Enter Director",
                },
                year: {
                    required: "Please Enter Year",
                },
                video: {
                    required: "Please Upload Video",
                },
                description: {
                    required: "Please Enter Description",
                },
            },
        });

        $("#editVideo").validate({
            rules: {
                category_id: {
                    required: true,
                },
                subcategory_id: {
                    required: true,
                },
                name: {
                    required: true,
                },
                duration: {
                    required: true,
                },
                cast: {
                    required: true,
                },
                director: {
                    required: true,
                },
                year: {
                    required: true,
                },
                description: {
                    required: true,
                },
            },
            messages: {
                category_id: {
                    required: "Please Enter Category Name",
                },
                subcategory_id: {
                    required: "Please Enter Sub-Category Name",
                },
                name: {
                    required: "Please Enter Name",
                },
                duration: {
                    required: "Please Enter Duration",
                },
                cast: {
                    required: "Please Enter Cast",
                },
                director: {
                    required: "Please Enter Director",
                },
                year: {
                    required: "Please Enter Year",
                },
                description: {
                    required: "Please Enter Description",
                },
            },
        });

        $("#addSettings").validate({
            rules: {
                key: {
                    required: true,
                },
                text: {
                    required: true,
                },
                value: {
                    required:true,
                },
            },
            messages: {
                key: {
                    required: "Please Enter Key",
                },
                text: {
                    required: "Please Enter Text",
                }, 
                value: {
                    required: "Please Enter Value",
                },               
            },
        });
    });  
</script>

<script type="text/javascript">
     $(document).on('change','#category_id',function(){
        var category_id = $(this).val();
            $("#subcategory_id").html('');
            $.ajax({
                url:"{{ route('admin.checkCategory') }}",
                type: "POST",
                data: {
                    category_id: category_id,
                     _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#subcategory_id').append('<option value="">Select Sub-Category</option>')
                    $.each(result.subcategory,function(key,value){
                    $("#subcategory_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            }
        });
     });
</script>
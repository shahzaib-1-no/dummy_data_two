<!doctype html>
<html lang="en">

<head>
    <title>a</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col msg"></div>
        </div>
    </div>
    <div class="container">
        <div class="row  mt-3">
            <div class="col-3 mr-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">City</h5>
                        <button type="button" class="btn add_city" data-bs-toggle="modal" data-bs-target="#city_modal">
                            Add City
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mr-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Socity</h5>
                        <button type="button" class="btn add_city" data-bs-toggle="modal"
                            data-bs-target="#socity_model">
                            Add Socity
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--City Modal Start -->
    <div class="modal fade " id="city_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">City</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_city_form">
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <select class="form-control" name="country" id="country">
                            </select>
                        </div>
                        <div class="form-group hide_state">
                            <label for="">Select State</label>
                            <select class="form-control" name="state" id="state">
                            </select>
                        </div>
                        <div class="form-group hide_city">
                            <label for="">Add City</label>
                            <input type="text" class="form-control" name="add_city" id="add_city"
                                aria-describedby="helpId" placeholder="">
                        </div>
                        <button type="button" type="submit" id="add" class="btn btn-primary">Add</button>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_city_button"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--City Modal End -->

    <!--Socity Modal Start -->
    <div class="modal fade " id="socity_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_socity">
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <select class="form-control" name="country" id="socity_country">
                            </select>
                        </div>
                        <div class="form-group hide_socity_state">
                            <label for="">Select State</label>
                            <select class="form-control" name="state" id="socity_state">
                            </select>
                        </div>
                        <div class="form-group hide_socity_city">
                            <label for="">Select City</label>
                            <select class="form-control" name="city" id="socity_city">
                            </select>
                        </div>
                        <div class="form-group hide_socity">
                            <label for="">Add All Socity</label>
                            <textarea class="form-control" name="socity" id="socity" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="add_socity_data">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary socity_form_reset"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Socity Modal End -->

    {{-- Form Start --}}
    <div class="container mt-3 ">
        <div class="row  offset-4">
            <div class="col-8">
                <form id="form_data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" id="fullname"
                            placeholder="Enter Fullname">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter Passwrod">
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <select class="custom-select" name="form_country" id="form_country">
                                </select>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select class="custom-select" name="form_state" id="form_state">
                                    <option selected>State</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select class="custom-select" name="form_city" id="form_city">
                                    <option selected>City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select class="custom-select" name="form_socity" id="form_socity">
                                    <option selected>Socity</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="form_id">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm add_form_button">Add</button>
                        <button class="btn btn-success btn-sm update_form_button">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Form End --}}

    {{-- Show Form Data Start --}}
    <div class="container hide_form_data">
        <div class="row mt-3">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Socity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="show_data_body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Show Form Data End --}}
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Add_City Code Start --}}
    <script>
        $(document).ready(function() {
            $('.update_form_button').hide();
            setInterval(() => {
                if ($('.msg').text() !== null) {
                    $('.msg').text('')
                }
            }, 3000);
            show_country();
            $('.hide_state').hide();
            $('.hide_city').hide();

            function show_country() {
                $.ajax({
                    type: "GET",
                    url: "country_data",
                    success: function(response) {
                        $('#country').append('<option selected>Country</option>');
                        response.forEach(country => {
                            $('#country').append(
                                '<option value= ' + country.id + '>' + country
                                .country_name + '</option>'
                            );
                        });
                    }
                });
            }
            $('#country').change(function(e) {
                e.preventDefault();
                var id = $('#country').val();
                $.ajax({
                    type: "GET",
                    url: "state_data/" + id,
                    success: function(response) {
                        $('.hide_state').show();
                        $('#state').empty();
                        $('#state').append('<option selected>State</option>');
                        response.forEach(state => {
                            $('#state').append('<option value=' + state.id + '>' + state
                                .state_name +
                                '</option>');
                        });
                    }
                });
            });
            $('#state').change(function(e) {
                e.preventDefault();
                $('.hide_city').show();
            });
            $('#add').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "add_city_data",
                    data: $('#add_city_form').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add_city_form')[0].reset();
                        $('.msg').text(response.msg);
                    }
                });
            });
            $('.close_city_button').click(function(e) {
                e.preventDefault();
                $('#add_city_form')[0].reset();
                $('.hide_state').hide();
                $('.hide_city').hide();

            });

        });
    </script>
    {{-- Add_City Code End --}}

    {{-- Add_Socity Code Start --}}
    <script>
        $(document).ready(function() {
            show_country();
            $('.hide_socity_state').hide();
            $('.hide_socity_city').hide();
            $('.hide_socity').hide();

            function show_country() {
                $.ajax({
                    type: "GET",
                    url: "country_data",
                    success: function(response) {
                        $('#socity_country').append('<option selected>Country</option>');
                        response.forEach(country => {
                            $('#socity_country').append('<option value=' + country.id + '>' +
                                country.country_name +
                                '</option>');
                        });
                    }
                });
            }
            $('#socity_country').change(function(e) {
                e.preventDefault();
                $('.hide_socity_state').show();
                var id = $('#socity_country').val();
                $.ajax({
                    type: "GET",
                    url: "state_data/" + id,
                    success: function(response) {

                        $('#socity_city').empty();
                        $('.hide_socity_city').hide();
                        $('#socity_state').empty();
                        $('#socity_state').append('<option selected>State</option>');
                        response.forEach(state => {
                            $('#socity_state').append('<option value=' + state.id +
                                '>' + state.state_name + '</option>');
                        });
                    }
                });

            });

            $('#socity_state').change(function(e) {
                e.preventDefault();
                var id = $('#socity_state').val();
                $.ajax({
                    type: "GET",
                    url: "city_data/" + id,
                    success: function(response) {
                        $('.hide_socity_city').show();
                        $('#socity_city').empty();
                        $('#socity_city').append('<option selected>City</option>');
                        response.forEach(city => {
                            $('#socity_city').append('<option value=' + city.id + '>' +
                                city.city_name +
                                '</option>');
                        });
                    }
                });
            });

            $('#socity_city').change(function(e) {
                e.preventDefault();
                $('.hide_socity').show();

            });

            $('#add_socity_data').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "socity_data",
                    data: $('#add_socity').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add_socity')[0].reset();
                        $('.msg').text(response.msg);
                    }
                });
            });

            $('.socity_form_reset').click(function(e) {
                e.preventDefault();
                $('#add_socity')[0].reset();
                $('.hide_socity_state').hide();
                $('.hide_socity_city').hide();
                $('.hide_socity').hide();
            });
        });
    </script>
    {{-- Add_Socity Code End --}}

    {{-- Form Code Start --}}
    <script>
        form_country();
        show_form_data();
        $(document).ready(function() {
            $('#form_data').validate({
                rules: {
                    fullname: 'required',
                    email: 'required',
                    password: 'required',
                    form_country: {
                        required: function(element) {
                            return $('#form_country').val() === 'Country';
                        }
                    }
                },
                submitHandler: function() {
                    var country_name = $('#form_country option:selected').text();
                    var state_name = $('#form_state option:selected').text();
                    var city_name = $('#form_city option:selected').text();
                    var socity_name = $('#form_socity option:selected').text();
                    var all_data = $('#form_data').serialize() + "&country_name=" + country_name +
                        "&state_name=" + state_name + "&city_name=" + city_name + "&socity_name=" +
                        socity_name;
                    $.ajax({
                        type: "POST",
                        url: "form_data",
                        data: all_data,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#form_data')[0].reset();
                            $('.msg').text(response.msg);
                            show_form_data();
                        }
                    });
                }
            });
        });

        function form_country() {
            $.ajax({
                type: "GET",
                url: "country_data",
                success: function(response) {
                    $('#form_country').append('<option selected>Country</option>');
                    response.forEach(country => {
                        $('#form_country').append('<option value=' + country.id +
                            '>' + country
                            .country_name + '</option>');
                    });
                }
            });
        }

        $('#form_country').change(function(e) {
            e.preventDefault();
            var id = $('#form_country').val();
            // var country_name = $('#form_country option:selected').text();
            $.ajax({
                type: "GET",
                url: "state_data/" + id,
                success: function(response) {
                    $('#form_city').empty();
                    $('#form_city').append('<option selected>City</option>');
                    $('#form_state').empty();
                    $('#form_state').append('<option selected>State</option>');
                    response.forEach(state => {
                        $('#form_state').append('<option value=' + state.id + '>' + state
                            .state_name + '</option>');
                    });
                }
            });

        });

        $('#form_state').change(function(e) {
            e.preventDefault();
            var id = $('#form_state').val();
            $.ajax({
                type: "GET",
                url: "city_data/" + id,
                success: function(response) {
                    $('#form_city').empty();
                    $('#form_city').append('<option selected>City</option>');
                    response.forEach(city => {
                        $('#form_city').append('<option value=' + city.id + '>' + city
                            .city_name + '</option>');
                    });
                }
            });
        });

        $('#form_city').change(function(e) {
            e.preventDefault();
            var id = $('#form_city').val();
            $.ajax({
                type: "GET",
                url: "socity_form/" + id,
                success: function(response) {
                    $('#form_socity').empty();
                    $('#form_socity').append('<option selected>Socity</option>');
                    response.forEach(socity => {
                        $('#form_socity').append('<option value=' + socity.id + '>' + socity
                            .socity_name + '</option>');
                    });
                }
            });
        });

        function show_form_data() {
            var count = '';
            $.ajax({
                type: "GET",
                url: "show_all_data",
                success: function(response) {
                    $('#show_data_body').empty();
                    response.forEach(data => {
                        count++;
                        $('#show_data_body').append(
                            '<tr>\
                                                                            <td>' + count + '</td>\
                                                                            <td>' + data.fullname + '</td>\
                                                                            <td>' + data.email + '</td>\
                                                                            <td>' + data.password + '</td>\
                                                                            <td>' + data.country_name + '</td>\
                                                                            <td>' + data.state_name + '</td>\
                                                                            <td>' + data.city_name + '</td>\
                                                                            <td>' + data.socity_name +
                            '</td>\
                                                                            <td><button class="btn btn-warning btn-sm update" data-id=' +
                            data
                            .id +
                            '>Update</button></td>\
                                                                            <td><button class="btn btn-danger btn-sm delete" data-name=' +
                            data
                            .fullname +
                            ' data-id=' + data.id + '>Delete</button></td>\
                                                                        </tr>'
                        );
                    });
                }
            });
        }

        $('#show_data_body').on('click', '.delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var fullname = $(this).data('name');
            var check = confirm("Are You Sure You Want To Delete " + fullname);
            if (check) {
                $.ajax({
                    type: "GET",
                    url: "delete/" + id,
                    success: function(response) {
                        $('.msg').text(response.msg);
                        show_form_data();

                    }
                });
            }
        });

        $('#show_data_body').on('click', '.update', function(e) {
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "fetch_update_data/" + id,
                success: function(response) {
                    $('.hide_form_data').hide();
                    $('.update_form_button').show();
                    $('.add_form_button').hide();
                    $('#fullname').val(response.fullname);
                    $('#email').val(response.email);
                    $('#password').val(response.password);
                    $('#form_id').val(response.id);
                }
            });
        });
        $('.update_form_button').click(function(e) {
            e.preventDefault();
            var country_name = $('#form_country option:selected').text();
            var state_name = $('#form_state option:selected').text();
            var city_name = $('#form_city option:selected').text();
            var socity_name = $('#form_socity option:selected').text();
            var all_data = $('#form_data').serialize() + "&country_name=" + country_name +
                "&state_name=" + state_name + "&city_name=" + city_name + "&socity_name=" +
                socity_name;
            console.log(all_data);
            $.ajax({
                type: "POST",
                url: "update_data",
                data: all_data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('.update_form_button').hide();
                    $('.hide_form_data').show();
                    $('.add_form_button').show();
                    $('#form_data')[0].reset();
                    $('.msg').text(response.msg);
                    show_form_data();
                }
            });


        });
    </script>
    {{-- Form Code End --}}


</body>

</html>

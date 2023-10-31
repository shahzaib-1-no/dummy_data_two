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
            <div class="col-3 mr-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Phase</h5>
                        <button type="button" class="btn add_city" data-bs-toggle="modal"
                            data-bs-target="#phase_model">
                            Add Phase
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mr-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Block</h5>
                        <button type="button" class="btn add_city" data-bs-toggle="modal"
                            data-bs-target="#block_model">
                            Add Block
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 mr-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Sub Block</h5>
                        <button type="button" class="btn add_city" data-bs-toggle="modal"
                            data-bs-target="#sub_block_model">
                            Add Sub Block
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
    <div class="modal fade " id="socity_model" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <!--Phase Modal Start -->
    <div class="modal fade " id="phase_model" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Phase<br>
                        <div class="col msg"></div>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_phase">
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <select class="custom-select" name="country" id="phase_country">
                                <option selected>Country</option>
                            </select>
                        </div>
                        <div class="form-group hide_phase_state">
                            <label for="">Select State</label>
                            <select class="custom-select" name="state" id="phase_state">
                                <option selected>State</option>
                            </select>
                        </div>
                        <div class="form-group hide_phase_city">
                            <label for="">Select City</label>
                            <select class="custom-select" name="city" id="phase_city">
                                <option selected>City</option>
                            </select>
                        </div>
                        <div class="form-group hide_phase_socity">
                            <label for="">Select Socity</label>
                            <select class="custom-select" name="socity" id="phase_socity">
                            </select>
                        </div>
                        <div class="form-group hide_phase">
                            <label for="">Add All phase</label>
                            <textarea class="form-control" name="phase" id="phase" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="add_phase_data">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary phase_form_reset"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Phase Modal End -->

    <!--Block Modal Start -->
    <div class="modal fade " id="block_model" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Block<br>
                        <div class="col msg"></div>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_block">
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <select class="custom-select" name="country" id="block_country">
                                <option selected>Country</option>
                            </select>
                        </div>
                        <div class="form-group hide_block_state">
                            <label for="">Select State</label>
                            <select class="custom-select" name="state" id="block_state">
                                <option selected>State</option>
                            </select>
                        </div>
                        <div class="form-group hide_block_city">
                            <label for="">Select City</label>
                            <select class="custom-select" name="city" id="block_city">
                                <option selected>City</option>
                            </select>
                        </div>
                        <div class="form-group hide_block_socity">
                            <label for="">Select Socity</label>
                            <select class="custom-select" name="socity" id="block_socity">
                            </select>
                        </div>
                        <div class="form-group hide_block_phase">
                            <label for="">Select Phase</label>
                            <select class="custom-select" name="phase" id="block_phase">
                            </select>
                        </div>
                        <div class="form-group hide_block">
                            <label for="">Add All Block</label>
                            <textarea class="form-control" name="block" id="block" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="add_block_data">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary block_form_reset"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Block Modal End -->

    <!--Sub Block Modal Start -->
    <div class="modal fade " id="sub_block_model" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sub Block<br>
                        <div class="col msg"></div>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_sub_block">
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <select class="custom-select" name="country" id="sub_block_country">
                                <option value="">Country</option>
                            </select>
                        </div>
                        <div class="form-group hide_sub_block_state">
                            <label for="">Select State</label>
                            <select class="custom-select" name="state" id="sub_block_state">
                                <option>State</option>
                            </select>
                        </div>
                        <div class="form-group hide_sub_block_city">
                            <label for="">Select City</label>
                            <select class="custom-select" name="city" id="sub_block_city">
                                <option>City</option>
                            </select>
                        </div>
                        <div class="form-group hide_sub_block_socity">
                            <label for="">Select Socity</label>
                            <select class="custom-select" name="socity" id="sub_block_socity">
                            </select>
                        </div>
                        <div class="form-group hide_sub_block_phase">
                            <label for="">Select Phase</label>
                            <select class="custom-select" name="phase" id="sub_block_phase">
                            </select>
                        </div>
                        <div class="form-group hide_sub_block_block">
                            <label for="">Select Block</label>
                            <select class="custom-select" name="block" id="sub_block_block">
                            </select>
                        </div>
                        <div class="form-group hide_sub_block">
                            <label for="">Add All Sub Block</label>
                            <textarea class="form-control" name="sub_block" id="sub_block" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="add_sub_block_data">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary sub_block_form_reset"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Sub Block Modal End -->

    {{-- Form Start --}}
    <div class="container mt-3 ">
        <div class="row  offset-3">
            <div class="col-10">
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
                        <div class="col">
                            <div class="form-group">
                                <label for="">Country</label>
                                <select class="custom-select" name="form_country" id="form_country">
                                </select>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">State</label>
                                <select class="custom-select" name="form_state" id="form_state">
                                    <option value="">State</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">City</label>
                                <select class="custom-select" name="form_city" id="form_city">
                                    <option value="">City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Socity</label>
                                <select class="custom-select" name="form_socity" id="form_socity">
                                    <option value="">Socity</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Phase</label>
                                <select class="custom-select" name="form_phase" id="form_phase">
                                    <option value="">Phase</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Block</label>
                                <select class="custom-select" name="form_block" id="form_block">
                                    <option value="">Block</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Sub Block</label>
                                <select class="custom-select" name="form_sub_block" id="form_sub_block">
                                    <option value="">sub_Block</option>
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
                            <th>Phase</th>
                            <th>Block</th>
                            <th>Sub Block</th>
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
                        $('#state').append('<option value="">State</option>');
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
                    data: $('').serialize(),
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

    {{-- Add_Phase Code Start --}}
    <script>
        $(document).ready(function() {
            $('.hide_phase_state').hide();
            $('.hide_phase_city').hide();
            $('.hide_phase_socity').hide();
            $('.hide_phase').hide();
            phase_country();

            function phase_country() {
                $.ajax({
                    type: "GET",
                    url: "country_data",
                    success: function(response) {
                        response.forEach(country => {
                            $('#phase_country').append('<option value=' + country.id + '>' +
                                country.country_name + '</option>');
                        });
                    }
                });
            }

            $('#phase_country').change(function(e) {
                e.preventDefault();
                var id = $('#phase_country').val();
                $.ajax({
                    type: "GET",
                    url: "state_data/" + id,
                    success: function(response) {
                        $('#phase_city').empty();
                        $('#phase_city').append('<option selected>City</option>');
                        $('.hide_phase_city').hide();

                        $('#phase_socity').empty();
                        $('#phase_socity').append('<option selected>Socity</option>');
                        $('.hide_phase_socity').hide();

                        $('.hide_phase_state').show();
                        $('#phase_state').empty();
                        $('#phase_state').append('<option selected>State</option>');
                        response.forEach(state => {
                            $('#phase_state').append('<option value=' + state.id + '>' +
                                state.state_name + '</option>');
                        });
                    }
                });
            });

            $('#phase_state').change(function(e) {
                e.preventDefault();
                $('.hide_phase_city').show();
                var id = $('#phase_state').val();
                $.ajax({
                    type: "GET",
                    url: "city_data/" + id,
                    success: function(response) {
                        $('#phase_socity').empty();
                        $('#phase_socity').append('<option selected>Socity</option>');
                        $('.hide_phase_socity').hide();

                        $('#phase_city').empty();
                        $('#phase_city').append('<option selected>City</option>');
                        response.forEach(city => {
                            $('#phase_city').append('<option value=' + city.id + '>' +
                                city.city_name + '</option>');
                        });
                    }
                });
            });

            $('#phase_city').change(function(e) {
                e.preventDefault();
                var id = $('#phase_city').val();
                $.ajax({
                    type: "GET",
                    url: "socity_form/" + id,
                    success: function(response) {
                        $('.hide_phase_socity').show();
                        $('#phase_socity').empty();
                        $('#phase_socity').append('<option selected>Socity</option>');

                        response.forEach(socity => {
                            $('#phase_socity').append('<option value=' + socity.id +
                                '>' + socity.socity_name + '</option>');
                        });
                    }
                });
            });

            $('#phase_socity').change(function(e) {
                e.preventDefault();
                var id = $('#phase_socity').val();
                $('.hide_phase').show();
            });

            $('#add_phase_data').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "add_phase",
                    data: $('#add_phase').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add_phase')[0].reset();
                        $('.hide_phase_state').hide();
                        $('.hide_phase_city').hide();
                        $('.hide_phase_socity').hide();
                        $('.hide_phase').hide();
                        $('.msg').text(response.msg);

                    }
                });
            });

            $('.phase_form_reset').click(function(e) {
                e.preventDefault();
                $('#add_phase')[0].reset();
                $('.hide_phase_state').hide();
                $('.hide_phase_city').hide();
                $('.hide_phase_socity').hide();
                $('.hide_phase').hide();
            });
        });
    </script>
    {{-- Add_Phase Code End --}}

    {{-- Add_block Code Start --}}
    <script>
        $(document).ready(function() {
            $('.hide_block_state').hide();
            $('.hide_block_city').hide();
            $('.hide_block_socity').hide();
            $('.hide_block_phase').hide();
            $('.hide_block').hide();

            block_country();

            function block_country() {
                $.ajax({
                    type: "GET",
                    url: "country_data",
                    success: function(response) {
                        response.forEach(country => {
                            $('#block_country').append('<option value=' + country.id + '>' +
                                country.country_name + '</option>');
                        });
                    }
                });
            }

            $('#block_country').change(function(e) {
                e.preventDefault();
                var id = $('#block_country').val();
                $.ajax({
                    type: "GET",
                    url: "state_data/" + id,
                    success: function(response) {
                        $('.hide_block_city').hide();
                        $('.hide_block_socity').hide();
                        $('.hide_block_phase').hide();
                        $('.hide_block').hide();

                        $('.hide_block_state').show();
                        $('#block_state').empty();
                        $('#block_state').append('<option selected>State</option>');
                        response.forEach(state => {
                            $('#block_state').append('<option value=' + state.id +
                                '>' + state.state_name + '</option>');
                        });
                    }
                });
            });

            $('#block_state').change(function(e) {
                e.preventDefault();
                var id = $('#block_state').val();
                $.ajax({
                    type: "GET",
                    url: "city_data/" + id,
                    success: function(response) {
                        $('.hide_block_socity').hide();
                        $('.hide_block_phase').hide();
                        $('.hide_block').hide();

                        $('.hide_block_city').show();
                        $('#block_city').empty();
                        $('#block_city').append('<option selected>City</option>');
                        response.forEach(city => {
                            $('#block_city').append('<option value=' + city.id +
                                '>' + city.city_name + '</option>');

                        });
                    }
                });
            });

            $('#block_city').change(function(e) {
                e.preventDefault();
                var id = $('#block_city').val();
                $.ajax({
                    type: "GET",
                    url: "socity_form/" + id,
                    success: function(response) {
                        $('.hide_block_phase').hide();
                        $('.hide_block').hide();

                        $('.hide_block_socity').show();
                        $('#block_socity').empty();
                        $('#block_socity').append('<option selected>Socity</option>');
                        response.forEach(socity => {
                            $('#block_socity').append('<option value=' + socity.id +
                                '>' + socity.socity_name + '</option>');
                        });
                    }
                });

            });

            $('#block_socity').change(function(e) {
                e.preventDefault();
                var id = $('#block_socity').val();
                $.ajax({
                    type: "GET",
                    url: "phase_data/" + id,
                    success: function(response) {
                        $('.hide_block_phase').show();
                        $('#block_phase').empty();
                        $('#block_phase').append('<option selected>Phase</option>');
                        response.forEach(phase => {
                            $('#block_phase').append('<option value=' + phase.id +
                                '>' + phase.phase_name + '</option>');
                        });
                    }
                });
            });

            $('#block_phase').change(function(e) {
                e.preventDefault();
                $('.hide_block').show();
            });

            $('#add_block_data').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "add_block",
                    data: $('#add_block').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('.hide_block_state').hide();
                        $('.hide_block_city').hide();
                        $('.hide_block_socity').hide();
                        $('.hide_block_phase').hide();
                        $('.hide_block').hide();
                        $('#add_block')[0].reset();
                        $('.msg').text(response.msg);

                    }
                });
            });

            $('.block_form_reset').click(function(e) {
                e.preventDefault();
                $('.hide_block_state').hide();
                $('.hide_block_city').hide();
                $('.hide_block_socity').hide();
                $('.hide_block_phase').hide();
                $('.hide_block').hide();
                $('#add_block')[0].reset();
            });
        });
    </script>
    {{-- Add_block Code End --}}

    {{-- Add_block Code Start --}}
    <script>
        $(document).ready(function() {
            sub_block_country();
            $('.hide_sub_block_state').hide();
            $('.hide_sub_block_city').hide();
            $('.hide_sub_block_socity').hide();
            $('.hide_sub_block_phase').hide();
            $('.hide_sub_block_block').hide();
            $('.hide_sub_block').hide();

            function sub_block_country() {
                $.ajax({
                    type: "GET",
                    url: "country_data",
                    success: function(response) {
                        response.forEach(country => {
                            $('#sub_block_country').append('<option value=' + country.id + '>' +
                                country.country_name + '</option>');
                        });
                    }
                });
            }

            $('#sub_block_country').change(function(e) {
                e.preventDefault();
                var id = $('#sub_block_country').val();
                $.ajax({
                    type: "GET",
                    url: "state_data/" + id,
                    success: function(response) {
                        $('.hide_sub_block_state').show();
                        $('#sub_block_state').empty();
                        $('#sub_block_state').append('<option>State</option>');
                        response.forEach(state => {
                            $('#sub_block_state').append('<option value=' + state.id +
                                '>' + state.state_name + '</option>');
                        });
                    }
                });
            });

            $('#sub_block_state').change(function(e) {
                e.preventDefault();
                var id = $('#sub_block_state').val();
                $.ajax({
                    type: "GET",
                    url: "city_data/" + id,
                    success: function(response) {
                        $('.hide_sub_block_city').show();
                        $('#sub_block_city').empty();
                        $('#sub_block_city').append('<option>City</option>');
                        response.forEach(city => {
                            $('#sub_block_city').append('<option value=' + city.id +
                                '>' + city.city_name + '</option>');
                        });
                    }
                });
            });

            $('#sub_block_city').change(function(e) {
                e.preventDefault();
                var id = $('#sub_block_city').val();
                $.ajax({
                    type: "GET",
                    url: "socity_form/" + id,
                    success: function(response) {
                        $('.hide_sub_block_socity').show();
                        $('#sub_block_socity').empty();
                        $('#sub_block_socity').append('<option>Socity</option>');
                        response.forEach(socity => {
                            $('#sub_block_socity').append('<option value=' + socity.id +
                                '>' + socity.socity_name + '</option>');
                        });
                    }
                });
            });

            $('#sub_block_socity').change(function(e) {
                e.preventDefault();
                var id = $('#sub_block_socity').val();
                $.ajax({
                    type: "GET",
                    url: "phase_data/" + id,
                    success: function(response) {
                        $('.hide_sub_block_phase').show();
                        $('#sub_block_phase').empty();
                        $('#sub_block_phase').append('<option>Phase</option>');
                        response.forEach(phase => {
                            $('#sub_block_phase').append('<option value=' + phase.id +
                                '>' + phase.phase_name + '</option>');
                        });
                    }
                });
            });

            $('#sub_block_phase').change(function(e) {
                e.preventDefault();
                var id = $('#sub_block_phase').val();
                $.ajax({
                    type: "GET",
                    url: "block_data/" + id,
                    success: function(response) {
                        $('.hide_sub_block_block').show();
                        $('#sub_block_block').empty();
                        $('#sub_block_block').append('<option>Block</option>');
                        response.forEach(block => {
                            $('#sub_block_block').append('<option value=' + block.id +
                                '>' + block.block_name + '</option>');
                        });
                    }
                });

            });

            $('#sub_block_block').change(function(e) {
                e.preventDefault();
                $('.hide_sub_block').show();
            });

            $('#add_sub_block_data').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "add_sub_block",
                    data: $('#add_sub_block').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('.hide_sub_block_state').hide();
                        $('.hide_sub_block_city').hide();
                        $('.hide_sub_block_socity').hide();
                        $('.hide_sub_block_phase').hide();
                        $('.hide_sub_block_block').hide();
                        $('.hide_sub_block').hide();
                        $('#add_sub_block')[0].reset();
                        $('.msg').text(response.msg);

                    }
                });
            });

            $('.sub_block_form_reset').click(function(e) {
                e.preventDefault();
                $('.hide_sub_block_state').hide();
                $('.hide_sub_block_city').hide();
                $('.hide_sub_block_socity').hide();
                $('.hide_sub_block_phase').hide();
                $('.hide_sub_block_block').hide();
                $('.hide_sub_block').hide();
                $('#add_sub_block')[0].reset();
            });
        });
    </script>
    {{-- Add_block Code End --}}

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
                    form_country: 'required',
                    form_state: 'required',
                    form_city: 'required',
                    form_socity: 'required',
                    form_phase: 'required',
                    form_block: 'required',
                    form_sub_block: 'required',
                },
                submitHandler: function() {
                    var country_name = $('#form_country option:selected').text();
                    var state_name = $('#form_state option:selected').text();
                    var city_name = $('#form_city option:selected').text();
                    var socity_name = $('#form_socity option:selected').text();
                    var phase_name = $('#form_phase option:selected').text();
                    var block_name = $('#form_block option:selected').text();
                    var sub_block_name = $('#form_sub_block option:selected').text();
                    var all_data = $('#form_data').serialize() + "&country_name=" + country_name +
                        "&state_name=" + state_name + "&city_name=" + city_name + "&socity_name=" +
                        socity_name + "&phase_name=" + phase_name + "&block_name=" + block_name +
                        "&sub_block_name=" + sub_block_name;
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
                    $('#form_country').append('<option value="">Country</option>');
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
                    $('#form_phase').empty();
                    $('#form_phase').append('<option value="">Phase</option>');

                    $('#form_socity').empty();
                    $('#form_socity').append('<option value="">Socity</option>');

                    $('#form_city').empty();
                    $('#form_city').append('<option value="">City</option>');

                    $('#form_state').empty();
                    $('#form_state').append('<option value="">State</option>');
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
                    $('#form_city').append('<option value="">City</option>');
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
                    $('#form_phase').empty();
                    $('#form_phase').append('<option value="">Phase</option>');

                    $('#form_socity').empty();
                    $('#form_socity').append('<option value="">Socity</option>');
                    response.forEach(socity => {
                        $('#form_socity').append('<option value=' + socity.id + '>' + socity
                            .socity_name + '</option>');
                    });
                }
            });
        });

        $('#form_socity').change(function(e) {
            e.preventDefault();
            var id = $('#form_socity').val();
            $.ajax({
                type: "GET",
                url: "phase_data/" + id,
                success: function(response) {
                    $('#form_phase').empty();
                    $('#form_phase').append('<option value="">Phase</option>');
                    response.forEach(phase => {
                        $('#form_phase').append('<option value=' + phase.id + '>' + phase
                            .phase_name + '</option>');
                    });
                }
            });
        });

        $('#form_phase').change(function(e) {
            e.preventDefault();
            var id = $('#form_phase').val();
            $.ajax({
                type: "GET",
                url: "block_data/" + id,
                success: function(response) {
                    $('#form_block').empty();
                    $('#form_block').append('<option value="">block</option>');
                    response.forEach(block => {
                        $('#form_block').append('<option value=' + block.id + '>' + block
                            .block_name + '</option>');
                    });
                }
            });

        });

        $('#form_block').change(function(e) {
            e.preventDefault();
            var id = $('#form_block').val();
            $.ajax({
                type: "GET",
                url: "sub_block_data/" + id,
                success: function(response) {
                    $('#form_sub_block').empty();
                    $('#form_sub_block').append('<option value="">sub_block</option>');
                    response.forEach(sub_block => {
                        $('#form_sub_block').append('<option value=' + sub_block.id + '>' +
                            sub_block
                            .sub_block_name + '</option>');
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
                        $('#show_data_body').append('<tr>\
                                <td>' + count + '</td>\
                                <td>' + data.fullname + '</td>\
                                <td>' + data.email + '</td>\
                                <td>' + data.password + '</td>\
                                <td>' + data.country_name + '</td>\
                                <td>' + data.state_name + '</td>\
                                <td>' + data.city_name + '</td>\
                                <td>' + data.socity_name + '</td>\
                                <td>' + data.phase_name + '</td>\
                                <td>' + data.block_name + '</td>\
                                <td>' + data.sub_block_name + '</td>\
                                <td><button class= "btn btn-sm btn-warning update" data-id="' + data.id + '">Update</button></td>\
                                <td><button class= "btn btn-sm btn-danger delete" data-id="' + data.id + '" data-name=' +
                            data.fullname + '>Delete</button></td>\
                                </tr>');
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
            var phase_name = $('#form_phase option:selected').text();
            var block_name = $('#form_block option:selected').text();
            var sub_block_name = $('#form_sub_block option:selected').text();
            var all_data = $('#form_data').serialize() + "&country_name=" + country_name +
                "&state_name=" + state_name + "&city_name=" + city_name + "&socity_name=" +
                socity_name + "&phase_name=" + phase_name + "&block_name=" + block_name + "&sub_block_name=" +
                sub_block_name;
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

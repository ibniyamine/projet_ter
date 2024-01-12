<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Resérvation</h3>
                            </a>
                        </div>
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <select name="depart" id="depart" class="form-control input-shadow" required>
                                    <option value="">Selectionner un depart</option>
                                    <option value="Dakar">Dakar</option>
                                    <option value="Colobane">Colobane</option>
                                    <option value="Hann">Hann</option>
                                    <option value="Dalifort">Dalifort</option>
                                    <option value="Baux-Maraichers">Baux-Maraichers</option>
                                    <option value="Thiaroye">Thiaroye</option>
                                    <option value="Yembeul">Yembeul</option>
                                    <option value="Keur Mbaye Fall">Keur Mbaye Fall</option>
                                    <option value="PNR">PNR</option>
                                    <option value="Rufisque">Rufisque</option>
                                    <option value="Bargny">Bargny</option>
                                    <option value="Diamniado">Diamniado</option>
                                    
                                </select>
                                <label for="">depart</label>
                                   
                                </div>
                                <div class="form-floating mb-3">
                                <select name="arrive" id="arrive" class="form-control" required>
                                    <option value="">Selectionnez la destination</option>
                                </select>  
                                <label for="">Destination</label>
                                </div>
                                <!-- <div class="form-floating mb-3">
                                    <input type="number" name="user_id" class="form-control" id="floatingInput"  placeholder="destination" required>
                                    <label for="">identifiant</label>
                                </div> -->
                                <div class="form-floating mb-3">
                                    <input type="datetime-local" name="heure_depart" class="form-control" id="heure_depart"  placeholder="heure" required>
                                    <label for="">heure</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="classe" id="classe" class="form-control" required>
                                        <option value="">Sélectionner la classe</option>
                                        <option value="1ère classe">1ère classe</option>
                                        <option value="2ème classe">2ème classe</option>
                                    </select>
                                    <label for="">classe</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="number" name="tarif" id="tarif" class="form-control" readonly>
                                    <label for="floatingPassword">Tarif</label>
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Reserver</button>
                            </form>
                        <a href="{{ route('reservation') }}"class="btn btn-primary py-3 w-100 mb-4">Voir les reservation</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
    <script src="public/js/jquery.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var input = document.getElementById('heure_depart');

        input.addEventListener('change', function() {
            var selectedDate = new Date(this.value);
            var currentDate = new Date();

            if (selectedDate < currentDate) {
                alert('Veuillez sélectionner une date ou une heure future.');
                this.value = '';
            }
        });

        $('#depart').change(function() {
            var depart = $(this).val();
            var arriveSelect = $('#arrive');
            arriveSelect.empty(); // Vide les options actuelles

            if (depart !== '') {
                // Remplit les options pour le lieu d'arrivée en excluant le lieu de départ
                var destinations = ['Dakar', 'Colobane', 'Hann', 'Dalifort', 'Baux-Maraichers', 'Thiaroye', 'Yembeul', 'Keur Mbaye Fall', 'PNR', 'Rufisque', 'Bargny', 'Diamniado'];
                for (var i = 0; i < destinations.length; i++) {
                    if (depart !== destinations[i]) {
                        arriveSelect.append($('<option></option>').attr('value', destinations[i]).text(destinations[i]));
                    }
                }
            } else {
                arriveSelect.append($('<option></option>').attr('value', '').text('Sélectionner le lieu d\'arrivée'));
            }
        });

        $('#depart, #arrive, #classe').change(function() {
            var depart = $('#depart').val();
            var arrive = $('#arrive').val();
            var classe = $('#classe').val();

            var tarif = 0;
            if (classe === '1ère classe') {
                tarif = 2500;
            } else {
                if (depart === 'Dakar' && arrive === 'Colobane' || arrive === 'hann') {
                    tarif = 500;
                } else if (depart === 'Dakar' && arrive === 'Hann' || arrive === 'Dalifort' || arrive === 'Baux-Maraichers') {
                    tarif = 1000;
                } else if (depart === 'Dakar' && arrive === 'Dalifort') {
                    tarif = 2000;
                } else if (depart === 'Dakar' && arrive === 'Pikine' || arrive === 'Diamniado') {
                    tarif = 2500;
                }
            }
            $('#tarif').val(tarif);
        });

    });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
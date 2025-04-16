<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

        <!-- Button trigger modal -->
        <button type="button" data-bs-toggle="modal" data-bs-target="#GoogleSearch">
            <i class="fas fa-search"></i> </button>

    <!-- Modal -->
    <div class="modal fade" id="GoogleSearch" tabindex="-1" aria-labelledby="GoogleSearchLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="GoogleSearchLabel">Wyszukiwanie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                </div>
                <div class="modal-body">
   
                
                    <form action="https://ug.edu.pl/external/search" method="get">
                        <div class="d-flex flex-row align-items-center p-4">
                        <div class="me-3">
                            <label for="search" class="form-label visually-hidden">Wyszukaj w Google</label>
                            <input type="text" class="form-control form-control-lg" id="search" name="q" placeholder="Wpisz zapytanie">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Szukaj</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
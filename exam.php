<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Students App</title>
  </head>
  <body>

    <nav>
      <ul>
        <li><a href="exam.php">Liste des examens</a></li>
        <li><a href="">Accueil</a></li>
      </ul>
    </nav>


    <div class="row">

      <section class="col-md-6">
      <h1>Liste des examens</h1>

      </section>

      <section class="col-md-6">
      <h1>Ajouter un examen</h1>

        <div class="col-md-5">
          <form action="process/add_exam.php" method="POST">
            <div class="form-group">
              <label for="">Matière</label>
              <input type="text" class="form-control" id="topic" name="topic" >
            </div>
            <div class="form-group">
              <label for="">date</label>
              <input type="date" class="form-control" id="dateExam" name="dateExam">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" id=addExamBtn>Ajouter</button>
          </form>
        </div>
      </section>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

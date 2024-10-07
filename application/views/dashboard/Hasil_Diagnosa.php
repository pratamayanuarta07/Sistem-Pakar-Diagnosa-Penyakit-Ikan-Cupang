<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Tingkat Keparahan</title>
<style>
     .scrollbar {
    position: relative;
    overflow-y: scroll;
    height: 350px;



}body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}
.form a {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.form a :hover {
  background: rgb(88, 56, 250);
}
.container {
  position: relative;
  max-width: 900px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);

} 
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
 form .button{
   height: 45px;
   margin: 35px 0
 }
 .container .form {
  margin-top: 30px;
}

</style>
</head>
<body>
<section class="container">
  <center>
<h2> Sistem Pakar Diagnosis Penyakit Ikan Cupang</h2>
  </center>
<hr />          
Hasil Diagnosa
    <hr />
        <div class="card-body scrollbar">
            
        <form >
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Diagnosa</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $nama_penyakit ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Tingkatan Keparahan</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo number_format((float)$tingkat_keparahan,2, '.', '');?>%" class="form-control" id="inputPassword3" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cara Mengobati</label>
                    <div class="col-sm-10">
                        <textarea rows="6" class="form-control" aria-label="With textarea" disabled><?php echo $cara_mengobati ?></textarea>    
                    </div>
                </div>
                
              </form>

        </div>
        <div class="form">
        <a href="<?= base_url('index')?>" class="submit btn btn-primary" type="submit"name="submit">Diagnosis Lagi</a>
        </div>
      </div>
</section>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>


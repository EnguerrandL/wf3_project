{{-- Page récapitulatif de la commande --}}


<div class="container">

    <div id="containerForm">
        <h2>Formulaire d'information client</h2>
        <form class="form" action="#" method="post">
          <label for="nom">*Nom</label>
          <input type="text" id="nom" name="nom" value="" placeholder="">

          <label for="prenom">*Prénom</label>
          <input type="text" id="prenom" name="prenom" value="" placeholder="">

          <label for="adresse">*Adresse</label>
          <input type="text" id="adresse" name="adresse" value="" placeholder="">

          <label for="ville">*ville</label>
          <input type="text" id="ville" name="ville" value="" placeholder="">

          <label for="cp">*Code Postal</label>
          <input type="text" id="cp" name="cp" value="" placeholder="">

          <label for="mail">*Mail</label>
          <input type="text" id="mail" name="mail" value="" placeholder="">
          <label for="verifMail">*verifMail</label>
          <input type="text" id="verifMail" name="verifMail" value="" placeholder="">

          <label for="tel">*Téléphone</label>
          <input type="text" id="tel" name="tel" value="" placeholder="">

          <input type="submit" value="Ajouter" name="envoyer">
        </form>
      </div>

</div>


<style>#container h2{
    text-align: center;
  }

  input[type=text], textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit], #newCompte {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  #containerForm {
    width:400px;
    margin:0 auto;
  }

  .form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  .custom-select {
    display: flex;
    flex-direction: column;
    width: 30%;
    margin: auto;
  }

  select::-ms-expand {
  display: none;
  }

  .selectdiv:after {
    top: 18px;
    padding: 0 0 2px;
    border-bottom: 1px solid #999;
    position: absolute;
    pointer-events: none;
  }

  .selectdiv select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;

    display: block;
    width: 100%;
    height: 50px;
    float: right;
    margin: 5px 0px;
    padding: 0px 24px;
    font-size: 16px;
    line-height: 1.75;
    color: #333;
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #cccccc;
    -ms-word-break: normal;
    word-break: normal;
  }

  /* Page LOGEMENTS */
  /* Tableau */

  table {
    background-color: black;
  }

  th {
    height: 40px;
  }

  th, td {
    border: 1px solid black;
    background-color: white;
  }

  td {
    padding: 5px;
    width: 300px;
    height: 300px;
  }

  img {
    width: 300px;
    object-fit: cover;
  }

  h2 {
    text-align: center;
  }</style>


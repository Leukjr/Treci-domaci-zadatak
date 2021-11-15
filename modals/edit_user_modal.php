<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izmjena korisnika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
  
      <form action="./update_user.php" method="POST">
      <input type="hidden" name="id" id="editModalId" >
          <div class="row">
              <div class="col-12">
              
                  <input type="text" name="first_name" id="editModalFirstName" class="form-control" placeholder="Unesite ime">
              </div>
              <div class="col-12 mt-3">
                  <input type="text" name="last_name" id="editModalLastName" class="form-control" placeholder="Unesite prezime">
              </div>
              <div class="col-12 mt-3">
                  <input type="email" name="email" id="editModalEmail" class="form-control" placeholder="Unesite e-mail adresu">
              </div>

              <div class="col-12 mt-3">
                  <select name="country" id="countrySelect" onchange="showCityList(1)" class="form-select" aria-label="Default select example">
                    <option selected id="selectedCountry"></option> 
                      <?php

                          $countries = getCountriesFromFile();

                          
                          for($i = 0; $i < count($countries); $i++) {
                            

                            echo" <option id=\"country-".$countries[$i]['id']."\"name=\"country\" value=".$countries[$i]['name']." >".$countries[$i]['name']."</option>";

                          }

                          /*
                            U countrySelect i citiesSelect treba dinamicno ubaciti value, svaki put kada se change country desi, dodati se novi value.
                          */
                          // echo "</select>"
                      ?>
                    </select>
              </div>

                <div class="col-12 mt-3">
                  <select name="city" id="citiesSelect" class="form-select" onchange ="setCityValue(2)" aria-label="Default select example">
                    


                  </select>
                </div>
              
          </div>

          <div class="row mt-3">
              <div class="col-4 offset-4">
                  <button class="btn btn-success w-100">Dodaj korisnika</button>
              </div>
          </div>
      </form>

      </div>
    </div>
  </div>
</div>
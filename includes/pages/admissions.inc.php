<div class="spacer"></div>
<div class="spacer"></div>
<h2 class="text-center my-4">Admissions</h2>
<div class="container-fluid">
    <div class="container">
        <div class="text-center">
            <h3>Search Registration By Contact number</h3>
            <form class="form-inline justify-content-center my-3" action="index.php?page=admissions" method="POST">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="number" name="register_search" class="form-control" placeholder="Contact no">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <select name="register_search_cat" id="">
                        <option value="fsc_admissions">FA/FSc</option>
                        <option value="bs_admissions">BS</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-pr mb-2"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div>
            <?php
        if(isset($no_of_admissions)){
            if($no_of_admissions < 1){
                echo '<h4 class="text-center text-danger">No result found!</h4>';
            }else{
                echo 'result found';
            }
        }
        ?>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-7 mx-auto">
                <a href="index.php?page=fsc_admission">
                    <div class="admissionCategory">
                        FA/FSc
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-7 mx-auto">
                <a href="index.php?page=bs_admission">
                    <div class="admissionCategory">
                        BS
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-7 mx-auto">
                <div class="admissionCategory">
                    Hostel
                </div>
            </div>
        </div>
    </div>
</div>
<style>
#regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
}

h1 {
    text-align: center;
}

input:not([type="radio"]) {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
    background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
    display: none;
}

button.registerFormButtons {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    cursor: pointer;
}

button.registerFormButtons:hover {
    opacity: 0.8;
}

#prevBtn {
    background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}

.step.active {
    opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
    background-color: #4CAF50;
}
</style>



<form id="regForm" action="index.php?page=bs_admission" method="POST">
    <?php
if($bs_success==1){
    echo '<div class="alert alert-success successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Registered!</strong> You registeration was successful.</div>';
    $bs_success = 0;
}else if($bs_success == 2){
    echo '<div class="alert alert-danger successDeleteMember" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Error!</strong> Error occured try again.</div>';
    $bs_success = 0;
}
?>
    <h1>Register</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">Personal info:
        <p><input type="text" name="name" placeholder="Name" /> </p>
        <p><input type="text" name="f_name" placeholder="Father Name" /></p>
        <label for="" class="mr-4 text-dark">Gender: </label>
        <input type="radio" name="gender" value="male" id="male" class="form-check-input" />
        <label for="male" class="form-check-label mr-5">Male</label>
        <input type="radio" name="gender" value="female" id="female" class="form-check-input" />
        <label for="female" class="form-check-label mr-5">female</label>
        <input type="radio" name="gender" value="shemale" id="shemale" class="form-check-input" />
        <label for="shemale" class="form-check-label">shemale</label>
        <p><input type="number" name="contact_no" placeholder="Contact" /> </p>
        <p> <input type="text" name="address" placeholder="Address" /> </p>

    </div>
    <div class="tab">Academics:
        <p class="text-center">Matric record</p>
        <p>
            Group:
            <select name="matric_group" id="">
                <option value="science">Science</option>
                <option value="arts">Arts</option>
            </select>
        </p>
        <p><input placeholder="Marks Obtained" oninput="this.className = ''" name="matric_marks_obtain" type="number">
        </p>
        <p><input placeholder="Total marks" oninput="this.className = ''" name="matric_total_marks" type="number"></p>
        <p><input placeholder="Board" oninput="this.className = ''" name="matric_board" type="text "></p>
        <p class="text-center">Fsc record</p>
        <p>
            Group:
            <select name="fsc_group" id="">
                <option value="Pre Engineering">Pre Engineering</option>
                <option value="Pre Medical">Pre Medical</option>
                <option value="Computer Scinece">Computer Scinece</option>
            </select>
        </p>
        <p><input placeholder="Marks Obtained" oninput="this.className = ''" name="marks_obtain" type="number"></p>
        <p><input placeholder="Total marks" oninput="this.className = ''" name="total_marks" type="number"></p>
        <p><input placeholder="Board" oninput="this.className = ''" name="board" type="text "></p>
    </div>
    <div class="tab">Applied for:
        <p>
            <select name="deptt" id="">
                <option value="Computer Science">Computer Science</option>
                <option value="English">English</option>
                <option value="Urdu">Urdu</option>
                <option value="Maths">Maths</option>
                <option value="Economics">Economics</option>
            </select>
        </p>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button class="registerFormButtons" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button class="registerFormButtons" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}
</script>
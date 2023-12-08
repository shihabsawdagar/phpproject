<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  </head>
  <body class="bg-gray-200 p-6">
    <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
      <h2 class="text-2x1 font-semibold mb-4">Form</h2>

      <?php
      //check if the form is submitted 

      if($_SERVER['REQUEST_METHOD'] ==='POST') {
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : ''; 
        $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';
        $datepicker = isset($_POST['datepicker']) ? htmlspecialchars($_POST['datepicker']) : ''; 
        $timepicker = isset($_POST['timepicker']) ? htmlspecialchars($_POST['timepicker']) : ''; 
        $options = isset($_POST['options']) ? $_POST['options'] : [];
        $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';

        echo '<div class="mb-6">';
        echo '<ul>';
        echo '<li><strong>Name:</strong>'.$name. '</li>';
        echo '<li><strong>Gender:</strong>'.$gender .'</li>';
        echo '<li><strong>Subscribe:</strong>'.$subscribe.'</li>';
        echo '<li><strong>Date Picker:</strong>'.$datepicker. '</li>';
        echo '<li><strong>Gender:</strong>'.$datepicker. '</li>';
        echo '<li><strong>Time Picker:</strong>'.$timepicker. '</li>';
        echo '<li><strong>Options:</strong>'. implode(',', $options) . '</li>';
        echo '<li><strong>Country:</strong>'.$country. '</li>';
        echo '</ul>';
        echo '</div>';
        
      };
      ?>

      <form action="#" method="POST">
        <!-- Text Input -->
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-600"
            >Name</label
          >
          <input
            type="text"
            name="name"
            class="mt-1 p-2 w-full border rounded-md"
            value="<?php echo $name ?>"
          />
        </div>

        <!--Radio button-->
        <div class="mb-4">
          <label for="gender" class="block text-sm font-medium text-gray-600"
            >Gender</label
          >
          <div class="mt-1 space-x-4">
            <label class="inline-flex items-center">
            <input
              type="radio"
              name="gender"
              value="male"
              class="form-radio textr-indigo-600"
              <?php echo $gender === 'male' ? 'checked':'' ?>
            />
            <span class="ml-2"> Male</span>
            </label>
            <label for="inline-flex items-center">
            <input
              type="radio"
              name="gender"
              value="female"
              class="form-radio textr-indigo-600"
              <?php echo $gender === 'female' ? 'checked':'' ?>
            />
            <span class="ml-2">Female</span>
            </label>
            <label for="inline-flex items-center">
            <input
              type="radio"
              name="gender"
              value="others"
              class="form-radio textr-indigo-600"
              <?php echo $gender === 'others' ? 'checked':'' ?>
            />
            <span class="ml-2">Other</span>
            </label>
          </div>
        </div>

        <!--checkbox-->

        <div class="mb-4" >
          <label for="subscribe" class="block text-sm text-gray-600"
            >Subscribe</label
          >
          <input
            type="checkbox"
            id="subscribe"
            name="subscribe"
            class="form-checkbox text-indigo-600"
            <?php echo isset($_POST['subscribe']) ? 'checked' : ''; ?>
            
            />
            
          <label for="subscribe 2" class="block text-sm text-gray-600"
            >Subscribe 2</label
          >
          <input
            type="checkbox"
            id="subscribe2"
            name="subscribe2"
            class="form-checkbox text-indigo-600"
            <?php echo isset($_POST['subscribe2']) ? 'checked' : ''; ?>
            
          />
        
          <label for="subscribe3" class="block text-sm text-gray-600"
            >Subscribe 3</label
          >
          <input
            type="checkbox"
            id="subscribe3"
            name="subscribe3"
            class="form-checkbox text-indigo-600"
            <?php echo isset($_POST['subscribe3']) ? 'checked' : ''; ?>
            
          />

        </div>
        


        <!--date picker-->
        <div class="mb-4">
          <label
            for="datepicker"
            class="block text-sm font-medium text-gray-600"
            >Pick a date</label
          >
          <input
            type="text"
            id="datepicker"
            name="datepicker"
            class="mt-1 p-2 w-full border rounded-md"
            value="<?php echo $datepicker ?>"
            
          />
        </div>

        <!--Time Picker-->
        <div class="mb-4">
          <label
            for="timepicker"
            class="block text-sm font-medium text-gray-600"
            >Pick a time</label
          >
          <input
            type="text"
            id="timepicker"
            name="timepicker"
            class="mt-1 p-2 w-full border rounded-md"
            value="<?php echo $timepicker ?>"
            
          />
        </div>
        <!--Multi-select dropdown using select2-->
        <div class="mb-4">
          <label for="options" class="block text-sm font-medium text-gray-600"
            >Select option</label
          >
          <select
            name="options[]"
            id="options"
            class="mt-1 p-2 w-full border rounded-md"
            multiple
          >
            <option value="option1"  <?php echo in_array('option1',$options) ? 'selected' : '' ?>>Option1</option>
            <option value="option2"  <?php echo in_array('option2',$options) ? 'selected' : '' ?>>Option2</option>
            <option value="option3" <?php echo in_array('option3',$options) ? 'selected' : '' ?>>Option3</option>
            <option value="option4" <?php echo in_array('option4',$options) ? 'selected' : '' ?>> Option4</option>
            <option value="option5" <?php echo in_array('option5',$options) ? 'selected' : '' ?>>Option5</option>
            <option value="option6" <?php echo in_array('option6',$options) ? 'selected' : '' ?>>Option6</option>
          </select>
        </div>

        <!--Select dropdown-->
        <div class="mb-4">
          <label for="country" class="block text-sm font-medium text-gray-600"
            >Country</label
          >
          <select
            name="country"
            id="country"
            class="mt-1 p-2 w-full border rounded-md"
          >
            <option value="usa" <?php echo ($country === 'usa') ? 'selected' : ''; ?>>United States</option>
            <option value="canada" <?php echo ($country === 'canada') ? 'selected' : ''; ?>>Canada</option>
            <option value="uk" <?php echo ($country === 'uk') ? 'selected' : ''; ?>>United Kingdom</option>
          </select>
        </div>

        <!--submit button-->
        <div class="mt-6">
          <button type="submit" class="bg-indigo-600 text-white p-2 rounded-md">
            Submit
          </button>
        </div>
      </form>
    </div>

    <script>

      //initialize select2 for the multiselect dropdown
      $(document).ready(function () {
        $("#options").select2();
      });

      //Initialize Flatpickr for the date and time pickers
      flatpickr("#datepicker", {
        enableTime: false,
        dateFormat: "d-m-Y",
      });

      flatpickr("#timepicker", {
       enableTime: true,
       noCalender: true,
       dateFormat: 'H:i',
      });
    </script>
  </body>
</html>

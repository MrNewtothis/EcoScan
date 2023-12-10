<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container-wrapper {
      margin: 30px 161px; /* Adjust the margin as needed */
    }

    .outer-container {
      display: flex;
      background-color: rgba(217, 217, 217, 0.1); /* D9D9D9 with 10% opacity */
      padding: 20px;
      overflow: hidden; /* Hide overflowing content */
    }

    .first-container {
      flex: 3;
      background-color: lightblue;
      padding: 20px;
      overflow-y: auto; /* Enable vertical scrolling for long content */
    }

    .first-container h2 {
      margin-bottom: 10px;
    }

    .first-container img {
      height: 25px; /* Adjust the height of the logo */
      margin-bottom: 10px;
    }

    .first-container p {
      text-align: justify; /* Justify the text content */
      /* Add your description content here */
    }

    .divider {
      border-left: 2px solid #ccc; /* Adjust the style of the divider */
      height: 100%; /* Make the divider extend the full height of the container */
    }

    .second-container {
      flex: 7;
      background-color: lightgreen;
      padding: 20px;
      display: flex;
      flex-direction: column; /* Align items vertically */
      overflow-y: auto; /* Enable vertical scrolling for long content */
    }

    .header-container {
      height: 50px; /* Adjust the height as needed */
    }

    .person-profiles-container {
      /* Container to wrap the profiles of the 5 persons */
      display: flex;
      flex-wrap: wrap; /* Allow profiles to wrap to the next line */
      justify-content: space-around; /* Distribute space evenly between profiles */
      overflow-y: auto; /* Enable vertical scrolling for long profiles */
      flex: 1;
    }

    .person-container {
      text-align: center;
      padding: 10px;
      box-sizing: border-box;
      max-width: calc(20% - 20px); /* Set max-width to prevent exceeding the second container */
      margin: 10px; /* Add margin for spacing between person containers */
    }

    .person-container img {
      height: 50px; /* Adjust the height of the image */
      border-radius: 50%; /* Make the image circular */
      margin-bottom: 10px;
    }

    .person-container p {
      margin: 0;
      font-weight: bold;
    }

    .person-container span {
      color: #555;
    }
  </style>
</head>
<body>

  <div class="container-wrapper">
    <div class="outer-container">
      <div class="first-container">
        <h2>About Us</h2>
        <img src="path/to/your/logo.png" alt="Logo">
        <p>
          This is a description that can be scrollable upon reading. 
          Add your content here, and it will scroll if it exceeds the container height.
        </p>
      </div>
      <div class="divider"></div>
      <div class="second-container">
        <!-- Header Container -->
        <div class="header-container">
          <h2>Header Content</h2>
        </div>

        <!-- Person Profiles Container -->
        <div class="person-profiles-container">
          <!-- Person 1 -->
          <div class="person-container">
            <img src="path/to/person1.jpg" alt="Person 1">
            <p>John Doe</p>
            <span>Group Role 1</span>
          </div>

          <!-- Person 2 -->
          <div class="person-container">
            <img src="path/to/person2.jpg" alt="Person 2">
            <p>Jane Smith</p>
            <span>Group Role 2</span>
          </div>

          <!-- Person 3 -->
          <div class="person-container">
            <img src="path/to/person3.jpg" alt="Person 3">
            <p>Bob Johnson</p>
            <span>Group Role 3</span>
          </div>

          <!-- Person 4 -->
          <div class="person-container">
            <img src="path/to/person4.jpg" alt="Person 4">
            <p>Alice Williams</p>
            <span>Group Role 4</span>
          </div>

          <!-- Person 5 -->
          <div class="person-container">
            <img src="path/to/person5.jpg" alt="Person 5">
            <p>Chris Brown</p>
            <span>Group Role 5</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

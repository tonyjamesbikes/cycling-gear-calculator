<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cycling Gear Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Cycling Gear Calculator</h1>
      <form>
        <div class="row">
          <div class="input-field col s6">
            <input type="number" id="chainring" min="1" required>
            <label for="chainring">Number of teeth on chainring</label>
          </div>
          <div class="input-field col s6">
            <input type="number" id="sprocket" min="1" required>
            <label for="sprocket">Number of teeth on sprocket</label>
          </div>
        </div>
        <p>Tire size:</p>
        <div class="row">
          <div class="col s3">
            <label>
              <input class="with-gap" name="tire-size" type="radio" value="26">
              <span>26"</span>
            </label>
          </div>
          <div class="col s3">
            <label>
              <input class="with-gap" name="tire-size" type="radio" value="27.5">
              <span>27.5"</span>
            </label>
          </div>
          <div class="col s3">
            <label>
              <input class="with-gap" name="tire-size" type="radio" value="29">
              <span>29"</span>
            </label>
          </div>
          <div class="col s3">
            <label>
              <input class="with-gap" name="tire-size" type="radio" value="27.5">
              <span>700c</span>
            </label>
          </div>
        </div>
        <div class="center-align">
          <button class="waves-effect waves-light btn" type="button" onclick="calculateDistance()">Calculate</button>
        </div>
      </form>
      <div class="row">
        <div class="col s12">
          <p class="flow-text">Distance per pedal stroke: <span id="distance"></span> meters</p>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>

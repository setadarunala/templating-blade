<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>

    <form action="/welcome">
      <!-- nama -->
      <label for="fname">First name:</label>
      <br />
      <input type="text" id="fname" />
      <br />
      <label for="lname">Last name:</label>
      <br />
      <input type="text" id="lname" />
      <br />
      <br />

      <!-- gender -->
      <label for="">Gender</label><br />
      <input type="radio" id="male" name="gender" value="male" />
      <label for="male">Male</label>
      <br />
      <input type="radio" id="female" name="gender" value="female" />
      <label for="female">Female</label>
      <br />
      <input type="radio" id="other" name="gender" value="other" />
      <label for="other">Other</label>
      <br />
      <br />

      <!-- negara -->
      <label for="nationality">Nationality :</label><br />
      <select name="" id="nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Singapura">Singapura</option>
      </select>
      <br />
      <br />

      <!-- language -->
      <label for="language">Language Spoken:</label>
      <br />
      <input type="checkbox" id="indo" name="language" value="indo" />
      <label for="indo">Bahasa Indonesia</label>
      <br />
      <input type="checkbox" id="eng" name="language" value="eng" />
      <label for="eng">English</label>
      <br />
      <input type="checkbox" id="Other" name="language" value="Other" />
      <label for="Other">Other</label>
      <br />
      <br />
      <!-- bio -->
      <label for="bio">Bio :</label>
      <br />
      <br />
      <textarea name="" id="bio" cols="30" rows="10"></textarea>
      <br />
      <button type="signup">Sign Up</button>
    </form>
  </body>
</html>

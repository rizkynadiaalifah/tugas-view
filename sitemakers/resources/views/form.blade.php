<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas nadia folmulir</title>
    <link rel="stylesheet" href="style.css">
</head>
    
</head>
<body>
    <h1>Buat Akun Baru</h1>
    <h2>Sigh Up Form</h2>

        <form action="{{url ('welcome')}}" method="get">
            <label for="first-name">first name :</label>
            <input type="text" id="first-name" name="first-name" requered><br><br>
            <label for="last-name">Last name :</label>
            <input type="text" id="last-name" name="last-name" requered>

            
        <br></br>
        

            <label>Gender</label><br></br>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="Female">Female<br></br>

            <label for="negara">Nationality</label><br></br>
            <select id="negara" name="negara">
                <option value="Indonesia">Indonesia</option>
                <option value="America">America</option>
                <option value="English">English</option>
            </select><br></br>


            <label>Language Spoken</label><br></br>
            <input type="checkbox" id="buatbox" name="buatbox" value="Indonesia">
            <label for="buatbox">Bahasa Indonesia</label><br>
            <input type="checkbox" id="buatbox" name="buatbox" value="English">
            <label for="buatbox">English<label></label><br>
            <input type="checkbox" id="buatbox" name="buatbox" value="Other">
            <label for="buatbox">Other</label><br></br>
            
                <p>Bio</p>
                <textarea name="massage" rows="10" cols="30"></textarea><br>
                
                <input type="submit" value="sigh up">


            
        </form>
</body>
</html>
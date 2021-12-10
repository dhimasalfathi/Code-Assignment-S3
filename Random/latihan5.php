<!DOCTYPE html>
<html>
<title>Latihan 5</title>
<script src="https://www.w3schools.com/lib/w3.js"></script>

<style>
* {
  box-sizing: border-box;
}

.city {
  float: left;
  width: 50%;
  padding: 10px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
<body>

<div class="row">
    <div id="class1" class="city">
       
    <h2>Item 1 Di Class 1</h2>
    <pp1>
    <p1>HEHEHEHEHEHEHEHE</p1>
    </pp1> 

    <h2>Item 2 Di Class 1</h2>
    <pp1>
    <p1>HEHEHEHEHEHEHEHE</p1>
    </pp1> 

    <p>
    <button onclick="w3.toggleShow('pp1')">Toggle Hide/Show Class 1</button>
    </p>

    </div>

    <div id="class2" class="city">
    <pp1>
    <pp2>
    <h2>Item 1 Di Class 2</h2>
        
    <h2>Item 2 Di Class 2</h2>
    </pp2>
    </pp1> 

    <p>
    <button onclick="w3.toggleShow('pp2')">Toggle Hide/Show Class 2</button>
    </p>

    </div>
</div>
</body>
</html>

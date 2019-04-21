<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
     body { font-family: 'Teko'; font-family: Arial, Helvetica, sans-serif; }
     .tab-pane { padding: 20px;background-color:#dff0d8; }
h2 { 
  display: block;
  font-size: 1.85em;
  margin-top: 0.83em;
  margin-bottom: 0.83em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
  padding: 0 10px;
}
     button {              
        border-color: #777777;
        color:#fff;
        border-radius: 4px;
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 8px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
     } 
     button:hover { background-color: green; }

     /* tab color */
     .nav-tabs>li>a {
      margin: 10px 1px 0 1px;
      background-color: #dff0d8; //#e7e7e7; 
      color: black;
     } 
  
     /* active tab color */
     .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
      color:#fff;
      background-color: #555555;
     } 

  </style>
</head>
<body>

<div class="container">
  <h2>API Tester..</h2>
  <p style="padding: 20px;background-color: #dff0d8;">some text</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#test1">Test 1</a></li>
    <li><a data-toggle="tab" href="#test2">Test 2</a></li>
    <li><a data-toggle="tab" href="#test3">Test 3</a></li>
    <li><a data-toggle="tab" href="#test4">Test 4</a></li>
  </ul>

  <div class="tab-content">
    <div id="test1" class="tab-pane fade in active">
      <h4>Test 1</h4>
      <textarea id="ta1" style="width:100%; height:300px;padding:5px;">input...test1</textarea>
      <button onclick="test1();">Submit 1</button>
    </div>

    <div id="test2" class="tab-pane fade" style="padding: 20px;">
      <h4>Test 2</h4>
      <textarea id="ta2"style="width:100%; height:300px;padding:5px;;">input..test2</textarea>
      <button onclick="test2();">Submit 2</button>
    </div>
  
    <div id="test3" class="tab-pane fade" style="padding: 20px;">
      <h4>Test 3</h4>
      <textarea id="ta3"style="width:100%; height:300px;padding:5px;;">input..test3</textarea>
      <button onclick="test3();">Submit 3</button>
  </div>
  
    <div id="test4" class="tab-pane fade" style="padding: 20px;">
      <h4>Test 4</h4>
      <textarea id="ta4" style="width:100%; height:300px;padding:5px;;">input..test4</textarea>
      <button onclick="test4();">Submit 4</button>
    </div>
  </div>
</div>


<script>
   var r = "";

   function test1() {
      var s = document.createElement("script");
      var i = document.getElementById("ta1").value;
      r = "test1";

      s.src = "http://atburst.atwebpages.com/at/rosetta/server.php?req=test1&inp="+i;
      document.body.appendChild(s); 
   }

   function test2() {
      var s = document.createElement("script");
      var i = document.getElementById("ta2").value;
      r = "test2";

      s.src = "http://atburst.atwebpages.com/at/rosetta/server.php?req=test2&inp="+i;
      document.body.appendChild(s); 
   }

   function test3() {
      var s = document.createElement("script");
      var i = document.getElementById("ta3").value;
      r = "test3";

      s.src = "http://atburst.atwebpages.com/at/rosetta/server.php?req=test3&inp="+i;
      document.body.appendChild(s); 
   }

   function test4() {
      var s = document.createElement("script");
      var i = document.getElementById("ta4").value;
      r = "test4";

      s.src = "http://atburst.atwebpages.com/at/rosetta/server.php?req=test4&inp="+i;
      document.body.appendChild(s); 
   }

   function cb_rosetta(myObj) {
       var inp = myObj.inp;
       var out = myObj.out;
       var req = myObj.req;
       //alert(txt);

       if (r == "test1") {
          document.getElementById("ta1").value = 
             "inp: "+inp+"\n"+
             "out: "+out+"\n"+
             "req: "+req+"\n";
       }
       if (r == "test2") {
          document.getElementById("ta2").value = 
             "inp: "+inp+"\n"+
             "out: "+out+"\n"+
             "req: "+req+"\n";
       }
       if (r == "test3") {
          document.getElementById("ta3").value = 
             "inp: "+inp+"\n"+
             "out: "+out+"\n"+
             "req: "+req+"\n";
       }
       if (r == "test4") {
          document.getElementById("ta4").value = 
             "inp: "+inp+"\n"+
             "out: "+out+"\n"+
             "req: "+req+"\n";
       }
   }

</script>

</body>
</html>

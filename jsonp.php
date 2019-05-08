 <script>

  var r = "";

  function compile_mc() {
      document.getElementById("_compiler").value = "";
      $('#tabs_left a[href="#mcode_"]').tab('show');
      $('#tabs_right a[href="#_compiler_"]').tab('show');
      
      r = "mcode";
      createScriptTag_mcode();

      // ll btns
      document.getElementById("compmc").classList.add("hide");
      document.getElementById("compbc").classList.remove("hide");
  }
 
  function compile_bc() {
      document.getElementById("_compiler").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_compiler_"]').tab('show');
      
      r = "bcode";
      createScriptTag_bcode();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
      document.getElementById("evaluate").classList.remove("hide");
  }

  function evaluate_bc() {
     document.getElementById("_compiler").value = 
         document.getElementById("bcode").value;
  }


  function step1() {
      document.getElementById("_bcode").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_bcode_"]').tab('show');
      
      r = "step1";
      createScriptTag_step1();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
  }

  function step2() {
      document.getElementById("_bcode").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_bcode_"]').tab('show');
      
      r = "step2";
      createScriptTag_step2();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
  }

  function step3() {
      document.getElementById("_bcode").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_bcode_"]').tab('show');
      
      r = "step3";
      createScriptTag_step3();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
  }

  function step4() {
      document.getElementById("_bcode").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_bcode_"]').tab('show');
      
      r = "step4";
      createScriptTag_step4();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
  }

  function step5() {
      document.getElementById("_bcode").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_bcode_"]').tab('show');
      
      r = "step5";
      createScriptTag_step5();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
  }

  function step6() {
      document.getElementById("_bcode").value = "";
      $('#tabs_left a[href="#bcode_"]').tab('show');
      $('#tabs_right a[href="#_bcode_"]').tab('show');
      
      r = "step6";
      createScriptTag_step6();

      // ll btns
      document.getElementById("compbc").classList.add("hide");
  }


  // *** API


  function createScriptTag_mcode() {
      var obj, s
      var s = document.createElement("script");
      var i = document.getElementById("assembly").value; 
      i = i.replace(/#/g, '§');

      obj = { req: "mcode", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_bcode() {
      var obj, s
      var s = document.createElement("script");
      var i = document.getElementById("mcode").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "bcode", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_step6() {
      var obj, s
      var s = document.createElement("script");

      var i = document.getElementById("_compiler").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "step6", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_step5() {
      var obj, s
      var s = document.createElement("script");

      var i = document.getElementById("_compiler").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "step5", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_step4() {
      var obj, s
      var s = document.createElement("script");

      var i = document.getElementById("_compiler").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "step4", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_step3() {
      var obj, s
      var s = document.createElement("script");

      var i = document.getElementById("_compiler").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "step3", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_step2() {
      var obj, s
      var s = document.createElement("script");

      var i = document.getElementById("_compiler").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "step2", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  function createScriptTag_step1() {
      var obj, s
      var s = document.createElement("script");

      var i = document.getElementById("_compiler").value; 
      i = i.replace(/#/g, '§');
  
      obj = { req: "step1", inp: i };
      s = document.createElement("script");
      s.src = "http://atburst.atwebpages.com/at/rosetta/test3.php?x=" + JSON.stringify(obj);
      document.body.appendChild(s);
  }

  // *** callbacks


    // callback for all..
    function myFunc3(myObj) {

       var x, txt = "";
       for (x in myObj) {
         if (myObj[x].ln != undefined) // when undefined... key is not [0], [1],..but [inp] or [req]
            txt += myObj[x].ln + "\n"; //"<br>";
       }

       if  (r == "mcode") {
           document.getElementById("mcode").value = txt;
       }
       else if  (r == "bcode") {
           document.getElementById("bcode").value = txt;
           // document.getElementById("_compiler").value = txt;
       }
       else if  (r == "step1") {
           document.getElementById("_bcode").value = txt;
       }
       else if  (r == "step2") {
           document.getElementById("_bcode").value = txt;
       }
       else if  (r == "step3") {
           document.getElementById("_bcode").value = txt;
       }
       else if  (r == "step4") {
           document.getElementById("_bcode").value = txt;
       }
       else if  (r == "step5") {
           document.getElementById("_bcode").value = txt;
       }
       else if  (r == "step6") {
           document.getElementById("_bcode").value = txt;
       }    
    }

 
 
</script>


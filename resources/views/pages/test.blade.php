<body>
  <h2 id="titel">Copy</h2>
  <input id="myInp" type="text" value="hey!" disabled>
  <button id="btnCopy">Copy</button>
</body>

<script type="text/javascript">
  const myInp = document.getElementById("myInp");
  const btnCopy = document.getElementById("btnCopy");

  btnCopy.onclick = function(){
    myInp.select();
    document.execCommand("Copy");
  };

</script>
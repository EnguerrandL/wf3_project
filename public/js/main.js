$(window).on("load", function() {
  //animation pour le chargement
  $("#loader").hide();
  var node = document.getElementById("spinner");
  if (node.parentNode) {
    node.parentNode.removeChild(node);
  }
  $("#spinner").css("cursor", "auto");
});

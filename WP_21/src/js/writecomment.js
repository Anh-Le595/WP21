var ele = document.getElementById('write-comment');
ele.onclick = func;


function func() {
  document.getElementById('write-comment').style.display = "none";
  document.getElementById('write-comment-popup').style.display = "block";
}
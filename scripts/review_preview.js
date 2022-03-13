function loadFile(event) {
    for (let i = 0, numFiles = event.target.files.length; i < numFiles; i++) {
      var output = document.createElement("img");
      output.className = "upload-img";
      output.src = URL.createObjectURL(event.target.files[i]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
      document.getElementById("upload-preview").appendChild(output);
    }
  };

  function cancelImg() {
    document.getElementById('review-img').value = "";
    document.getElementById('upload-preview').innerHTML = "";
  }

  function validate_rate() {
    // const user_id = 31310; // temporary; wait for cookies to work
    const rating = document.getElementsByClassName("rating__star fas fa-star").length;
    // document.getElementById("author").value = user_id;
    document.getElementById("rating").value = rating;
    if (rating == 0) {
      alert("validation failed false");
      return false;
    }
  }
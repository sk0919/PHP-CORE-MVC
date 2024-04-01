// <!-- JavaScript to handle dialog box behavior -->
 
/*
const openDialogButton = document.getElementById('openDialog');
const imageDialog = document.getElementById('imageDialog');
const imgupload = document.getElementById('imgupload');
const imageForm = document.getElementById('imageForm');

openDialogButton.addEventListener('click', () => {
    imageDialog.style.display = 'block';
});

imgupload.addEventListener('change', () => {
    // Validate file type (JPEG and PNG)
    const file = imgupload.files[0];
    if (file) {
        const fileType = file.type;
        if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
            alert('Please select a valid JPEG or PNG image.');
            imgupload.value = ''; // Clear the input field
        }
    }
});

imageForm.addEventListener('submit', (e) => {
    e.preventDefault();
    // Handle form submission (send data to the controller)
    // Example: Use AJAX to send the image data to the server
    // ...
    imageDialog.style.display = 'none'; // Close the dialog
});
*/


// Get the modal
var modal = document.getElementById("product-dialog-modal");

// Get the button that opens the modal
var btn = document.getElementById("create-product-dialog");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//-----------------------------------------------below code  for form submission---------------------------------



// JavaScript to handle form submission
imageForm.addEventListener('submit', async (e) => {
  e.preventDefault();

  const fileInput = document.querySelector('input[type="file"]');
  const file = fileInput.files[0];

  // Validate file type (JPEG and PNG)
  if (file) {
      const fileType = file.type;
      if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
          alert('Please select a valid JPEG or PNG image.');
          return;
      }
  }

  // Create FormData object and append the file
  const formData = new FormData();
  formData.append('image', file);

  try {
    const url = ROOT_URL+ '/product/add';
    
    // Send the image data to the server using AJAX
    const response = await fetch(url, {
        method: 'POST',
        body: formData,
    });
    console.log("your response is "+response.toString());

    if (response.ok) {
        const result = await response.text();
        console.log(result); // Handle the server response
    } else {
        console.error('Error uploading image.');
    }
  } catch (error) {
      console.error('Network error:', error);
  }

  // Close the dialog
  //imageDialog.style.display = 'none';
  modal.style.display = 'none';
});

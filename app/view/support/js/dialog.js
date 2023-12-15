let dialog = document.getElementById('new_post_dialog');

function openDialog(){
    dialog.open = true;
}

function closeDialog(){
    dialog.open = false;
}

// binding with buttons

let closeButton = document.getElementById('close_button');
closeButton.addEventListener('click', closeDialog, true);

let openButton = document.getElementById('open_button');
openButton.addEventListener('click', openDialog, true);


const btn = document.querySelector("#btn-enviar");
    const form = document.querySelector("#form");
    btn.addEventListener("click", (e) =>{
	    e.preventDefault();
	    const datos = new FormData(form);
	    fetch('insertincludesubject',{
		    method: 'post',
		    body:datos
	    })
	    .then(response => response.json())
	    .then(result => {
		    console.log(result)
		    
		    if (result.alerta == "success") {
			    const success = document.querySelector(".alert");
			    success.removeAttribute('hidden');
		    }else{
                alert('falla');
            }
		
	    })
    });
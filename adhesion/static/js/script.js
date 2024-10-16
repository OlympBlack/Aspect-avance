const profession = document.getElementById('profession');
const autres = document.getElementById('profession_autre');
//alert(profession.length);

profession.addEventListener('change', ()=>{
    if(profession.value === 'Autres'){
        autres.style.display = 'block';
        autres.style.border = '1px solid green';
        autres.setAttribute('required', 'required');
    }else{
        autres.style.display = 'none';
        autres.removeAttribute('required');
    }
});




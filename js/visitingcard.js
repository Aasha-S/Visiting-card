// setting up logo 
const uploadBtn=document.querySelector('#upload');
const logo=document.querySelector('.logo');

uploadBtn.addEventListener('change',()=>{
    if(uploadBtn.files && uploadBtn.files[0]){
        let reader=new FileReader();//init the file reader

        reader.addEventListener('load',()=>{
            logo.style.backgroundImage=`url('${reader.result}')`;
        })
        reader.readAsDataURL(uploadBtn.files[0]);
    }
})
// change the background
const bgs=document.querySelectorAll('.backgrounds img');
const card=document.querySelector('.cards');
let activeBg=0;//default background

bgs.forEach((item,i)=>{
item.addEventListener('click',()=>{
bgs[activeBg].classList.remove('active');
item.classList.add('active');
card.style.backgroundImage=`url('${item.src}')`;

activeBg=i;
})
})



// download button
let downloadBtn=document.querySelector('.download-btn');
let exportCard=()=>{
    html2canvas(card).then((Canvas)=> {
        let link=document.getElementById('link');
    
        link.href=Canvas.toDataURL('card');
        link.click();
    })
}
downloadBtn.addEventListener('click',()=>{
   
    const phone=document.querySelector('.phone')

if(phone.value.length==10){
    
    exportCard();
}
   else{
    alert("Enter phno degits=10")
   }
   

})


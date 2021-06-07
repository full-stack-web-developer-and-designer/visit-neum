const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close_btn]')
const mask = document.getElementById('mask')

openModalButtons.forEach(button => {
	button.addEventListener('click',() =>{
		const modal = document.querySelector(button.dataset.modalTarget)
		openModal(modal)
	})
})
mask.addEventListener('click', () => {
	const modals = document.querySelectorAll('.modal.active')
	modals.forEach(modal => {
		closeModal(modal)
	})
})
closeModalButtons.forEach(button => {
	button.addEventListener('click',() =>{
		const modal = button.closest('.modal')
		closeModal(modal)
	})
})	
function openModal(modal){
	if (modal == null) return
	modal.classList.add('active')
	mask.classList.add('active')
}
function closeModal(modal){
	if (modal == null) return
	modal.classList.remove('active')
	mask.classList.remove('active')
}
/*
modalPosition = $(".modal").offset().top;
$(window).scroll(function(){
   var isFixed = $(".modal").css("position") === "fixed";
   if($(window).scrollTop() > modalPosition && !isFixed){
            $(".modal").css({position:"fixed", top:"10px"});
   }else if($(window).scrollTop() < modalPosition){
        $(".modal").css({position:"absolute", top:"5px"});
   }
})
*/

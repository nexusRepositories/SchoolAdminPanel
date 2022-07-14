export const removeImage = (function() {

    const userpicClear = document.querySelector('[data-userpic="clear"]');
    const userpicDeleteFlag = document.querySelector('[data-userpic="delete-flag"]')
    const userpicPreview = document.querySelector('[data-userpic="preview"]');
    const userpicInput = document.querySelector('[data-userpic="input"]');
    const userpicLinkElem = document.querySelector('[data-userpiclink]');

    if(!userpicClear || !userpicDeleteFlag || !userpicPreview || !userpicInput || !userpicLinkElem) return;

    const userpicLink = userpicLinkElem.dataset.userpiclink;

    userpicInput.addEventListener('change', (e)=> {
        userpicDeleteFlag.value = '0';
    });
    
    userpicClear.addEventListener('click', ()=> {
        userpicInput.value = "";
        userpicPreview.style = `background-position: center; background-size: 95%; background-image: url('${userpicLink}');)`;
        userpicDeleteFlag.value = '1';
    });
})();
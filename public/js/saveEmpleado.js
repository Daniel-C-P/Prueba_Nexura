var select = document.getElementById('area');
select.addEventListener('change',ShowSelected);


function ShowSelected(){
    var value =  select.options[select.selectedIndex].value;
    document.getElementById('areaHidden').value = value;
}
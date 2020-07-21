const selectStates = document.querySelector('#states');
const selectCities = document.querySelector('#cities');
function populateStateSelect(){
    fetch('https://geoapibrasil.herokuapp.com/v1/states')
    .then(res => res.json())
    .then(states => { 
        states.map(state => {
            const option = document.createElement('option');
            option.setAttribute('value', state.state);
            option.textContent = state.stateName;
            selectStates.appendChild(option);
        });
    })
}
function populateCitySelect(){
    selectStates.addEventListener('change', () => {
        let nodesSelectCities = selectCities.childNodes;
        [...nodesSelectCities].map(node => node.remove());
        let state = selectStates.options[selectStates.selectedIndex].value;
        fetch('https://geoapibrasil.herokuapp.com/v1/cities?state=${state}')
        .then(res => res.json())
        .then(cities => {
            selectCities.removeAttribute('disabled');
            cities.map(city =>{
                const option = document.createElement('option');
                option.textContent = city.name;
                selectCities.appendChild(option);
                
            })
        })
    })
}
new statesCitiesBR({
  states: {
    elementID: "lista_estados",
    defaultOption: "Selecione um Estado"
  },
  cities: {
    elementID: "lista_cidades",
    state: "auto",
    defaultOption: "Selecione uma Cidade"
  }
});
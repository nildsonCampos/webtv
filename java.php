  <script>

    function pegarData() {

      let diaDaSemana = dataHora.getDay()
      let dia = dataHora.getDate()
      let mes = dataHora.getMonth() + 1
      let ano = dataHora.getFullYear()

      let strDia = new String(dia)
      let strMes = new String(mes)

      if (strDia.length == 1) mes = '0' + dia
      if (strMes.length == 1) mes = '0' + mes

      switch (diaDaSemana) {
        case 0:
          diaDaSemana = 'DOM'
          break;
        case 1:
          diaDaSemana = 'SEG'
          break;
        case 2:
          diaDaSemana = 'TER'
          break;
        case 3:
          diaDaSemana = 'QUA'
          break;
        case 4:
          diaDaSemana = 'QUI'
          break;
        case 5:
          diaDaSemana = 'SEX'
          break;
        case 6:
          diaDaSemana = 'SÁB'
          break;
      } // fim switch case

      let dataAtual = dia + '/' + mes + '/' + ano

      semana.textContent = diaDaSemana
      data.textContent = dataAtual

    }
    // evocar a funcao
    pegarData()

    var options = {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    }

    let teste = new Date()

    console.log(teste.toLocaleString('pt-BR'))
    console.log(teste.toLocaleString('pt-BR', options))
    console.log(teste.toLocaleDateString('pt-BR'))
    console.log(teste.toLocaleTimeString('pt-BR'))

    function getUserPosition() {
      let url = ''
      navigator.geolocation.getCurrentPosition((pos) => {
        let lat = pos.coords.latitude
        let long = pos.coords.longitude
        url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&units=imperial&APPID=622296cd4fda08b69c46ccfa980f968d`
        fetchApi(url)
        console.log(url)
      })
    }

    function fetchApi(url) {
      let city = document.querySelector('.city')
      let temperature = document.querySelector('#temp')
      let humidity = document.querySelector('#umidad')

      fetch(url)
        .then((data) => {
          return data.json()
        })
        .then((data) => {
          let tempInCelsius = ((5 / 9) * (data.main.temp - 32)).toFixed(1);

          city.textContent = data.name
          temperature.innerHTML = tempInCelsius
          humidity.innerHTML = data.main.humidity
        })
        .catch((err) => {
          city.innerText = `Impossível acessar o OpenWeather. Verifique a sua conexão.`;
          temperature.innerHTML = `-`;
        })
    }

    getUserPosition();
  </script>




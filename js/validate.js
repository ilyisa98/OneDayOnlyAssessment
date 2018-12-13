function allLetter(firstname,lastname)
      { 
      var letters = /^[A-Za-z]+$/;
      if(firstname.value.match(letters))
      {
      
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }

      if(lastname.value.match(letters))
      {
      
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
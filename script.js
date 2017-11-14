window.addEventListener('load', async () => {
  document.getElementById('submit').addEventListener('click', async (event) => {
    event.preventDefault()

    const formData = new FormData(document.getElementById('guestbook-form'));
    const response = await fetch('transformText.php', {
      method: 'post',
      body: formData
    });
    const jsonData = await response.json();

    if (typeof jsonData.error !== 'undefined') {
      document.getElementById('result').innerHTML = jsonData.error
    } else {
      document.getElementById('result').innerHTML = `${jsonData.name} wrote ${jsonData.text}`
    }
    
  })
})
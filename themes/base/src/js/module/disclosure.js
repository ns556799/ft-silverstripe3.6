const disclosures = Array.from(document.querySelectorAll('.disclosure'))

disclosures.forEach((disclosure) => {
  const button = disclosure.querySelector('button')
  const content = disclosure.querySelector('.demo-target')

  button.addEventListener('click', (e) => {
    e.preventDefault()
    content.classList.toggle('hidden')
  })
})

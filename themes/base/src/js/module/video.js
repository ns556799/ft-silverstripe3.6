import YTPlayer from 'yt-player'
import axios from 'axios'

const videoContainers = Array.from(document.querySelectorAll('.js-video-block'))
videoContainers.forEach((container) => {
  const videoID = container.dataset.videoid
  const videoContainer = container.querySelector('.m-video-block__video')
  const videoImg = container.querySelector('.m-video-block__img')
  console.log(videoImg)
  videoImg.style.backgroundImage = `url(https://img.youtube.com/vi/${videoID}/maxresdefault.jpg)`
  const videoPlayer = new YTPlayer(videoContainer)
  videoImg.addEventListener('click', (e) => {
    e.preventDefault()
    console.log('clicked')
    container.classList.add('-playing')
    videoPlayer.play()
    setTimeout((e) => {
      container.classList.add('-hide')
    }, 2000)
  })

  videoPlayer.load(videoID)
})

const ageWall = document.querySelector('.overlay-age-wall');
const ageWallWarning = document.querySelector('.overlay-age-wall-warning');

window.onload = function() {
  if(localStorage.getItem('adult')) {
    ageWall.style.display = 'none';
  } else {
    ageWall.style.display = 'flex';
  }
}

function notAdult()
{
  ageWall.style.display = 'none';
  ageWallWarning.style.display = 'flex';
}

function adult()
{
  localStorage.setItem('adult', true);
  ageWall.style.display = 'none';
  ageWallWarning.style.display = 'none';
}

function back()
{
  ageWallWarning.style.display = 'none';
  ageWall.style.display = 'flex';
}

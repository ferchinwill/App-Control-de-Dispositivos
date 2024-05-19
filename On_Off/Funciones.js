const iconOn = document.getElementById('icon-on');
const iconOff = document.getElementById('icon-off');

iconOff.addEventListener('click', () => {
  iconOff.style.display = 'none';
  iconOn.style.display = 'block';
  iconOn.classList.add('icon-on');
});

iconOn.addEventListener('click', () => {
  iconOn.style.display = 'none';
  iconOff.style.display = 'block';
  iconOn.classList.remove('icon-on');
});
const characters = [
    {
        name: 'shelly',
        characterImage: '/images/brawlers/shelly.png'
    },
    {
        name: 'nita',
        characterImage: '/images/brawlers/nita.png'
    },
    {
        name: 'colt',
        characterImage: '/images/brawlers/colt.png'
    },
    {
        name: 'bull',
        characterImage: '/images/brawlers/bull.png'
    },
    {
        name: 'jessie',
        characterImage: '/images/brawlers/jessie.png'
    },
    {
        name: 'brock',
        characterImage: '/images/brawlers/brock.png'
    },
    {
        name: 'dynamike',
        characterImage: '/images/brawlers/dynamike.png'
    },
    {
        name: 'bo',
        characterImage: '/images/brawlers/bo.png'
    },
    {
        name: 'el primo',
        characterImage: '/images/brawlers/primo.png'
    },
    {
        name: 'barley',
        characterImage: '/images/brawlers/barley.png'
    },
    {
        name: 'poco',
        characterImage: '/images/brawlers/poco.png'
    },
    {
        name: 'rico',
        characterImage: '/images/brawlers/rico.png'
    },
    {
        name: 'darryl',
        characterImage: '/images/brawlers/darryl.png'
    },
    {
        name: 'penny',
        characterImage: '/images/brawlers/penny.png'
    },
    {
        name: 'piper',
        characterImage: '/images/brawlers/piper.png'
    },
    {
        name: 'frank',
        characterImage: '/images/brawlers/frank.png'
    },
    {
        name: 'pam',
        characterImage: '/images/brawlers/pam.png'
    },
    {
        name: 'mortis',
        characterImage: '/images/brawlers/mortis.png'
    },
    {
        name: 'tara',
        characterImage: '/images/brawlers/tara.png'
    },
    {
        name: 'spike',
        characterImage: '/images/brawlers/spike.png'
    },
    {
        name: 'crow',
        characterImage: '/images/brawlers/crow.png'
    },
    {
        name: 'leon',
        characterImage: '/images/brawlers/leon.png'
    }
]

const h4 = document.querySelector('h4')
const img = document.querySelector('img')
img.style.animationPlayState = 'paused'

img.onclick = () => {
    img.style.animationPlayState = 'running'
    const randomIndex = Math.floor(Math.random() * characters.length)
    const { name, characterImage } = characters[randomIndex]
    setTimeout(() => {
        img.setAttribute('src', characterImage)
        h4.innerText = name
    }, 3000)
}


require('./bootstrap');
// test thunder client

export default function handler(req, res) {
    res.status(200).json({ name: 'stickman +8'})
}
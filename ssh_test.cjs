const { NodeSSH } = require('node-ssh');
const ssh = new NodeSSH();

async function testSSH() {
    const users = ['bytemini', 'byteminiz', 'byteminiz0', 'srini', 'id_rsa'];
    const passwords = ['$r!n1dh!', '7411452577@pnS'];
    
    for (let u of users) {
        for (let p of passwords) {
            console.log(`Trying ${u} with password: ${p}`);
            try {
                await ssh.connect({
                    host: '69.57.162.48',
                    username: u,
                    password: p,
                    port: 21098
                });
                console.log(`SUCCESS! Connected with user: ${u} and password: ${p}`);
                let result = await ssh.execCommand('pwd && ls -la', { cwd: '/' });
                console.log('STDOUT: ' + result.stdout);
                process.exit(0);
            } catch (error) {
                console.error(`Failed: ${error.message}`);
            }
        }
    }
    console.log("All combinations failed.");
    process.exit(1);
}

testSSH();

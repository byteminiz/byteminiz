const ftp = require("basic-ftp")

async function testFTP() {
    const client = new ftp.Client()
    client.ftp.verbose = true
    try {
        await client.access({
            host: "69.57.162.48",
            user: "byteminiz0",
            password: "$r!n1dh!",
            secure: false
        })
        console.log("FTP CONNECTED SUCCESSFULLY!")
        console.log(await client.list())
    }
    catch(err) {
        console.log("FTP Error: ", err)
    }
    client.close()
}

testFTP()

const fs = require('fs')
const fetch = require('node-fetch')

const headers = {
  'Access-Control-Allow-Origin': '*',
  'Content-Type': 'application/json',
  Accept: 'application/vnd.github.v3.raw',
  Authorization: 'token xxx'
}

const url = `https://api.github.com/repos/tchapi/markdown-cheatsheet/contents`
const path = './dados.json'

const dataList = (list) => {
  return list.map(async (item) => {
    const md = await fetch(item.download_url, headers).then((res) => res.text())
    return { name: item.name, content: md }
  })
}

const downloadFile = async (url, path) => {
  const result = await fetch(url, headers).then((res) => res.json())
  const fileStream = fs.createWriteStream(path)
  fileStream.write(JSON.stringify(await dataList(result)))
}

downloadFile(url, path)
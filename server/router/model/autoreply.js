const _0x5cfa73 = _0x248b;
(function(_0xcc397d, _0x39a6a5) {
    const _0xdf7168 = _0x248b,
        _0x52b13e = _0xcc397d();
    while (!![]) {
        try {
            const _0x5e7847 = parseInt(_0xdf7168(0x16a)) / 0x1 * (-parseInt(_0xdf7168(0x161)) / 0x2) + parseInt(_0xdf7168(0x166)) / 0x3 * (-parseInt(_0xdf7168(0x16d)) / 0x4) + parseInt(_0xdf7168(0x188)) / 0x5 + parseInt(_0xdf7168(0x17a)) / 0x6 + -parseInt(_0xdf7168(0x17c)) / 0x7 * (-parseInt(_0xdf7168(0x182)) / 0x8) + parseInt(_0xdf7168(0x16b)) / 0x9 * (parseInt(_0xdf7168(0x190)) / 0xa) + parseInt(_0xdf7168(0x169)) / 0xb * (parseInt(_0xdf7168(0x174)) / 0xc);
            if (_0x5e7847 === _0x39a6a5) break;
            else _0x52b13e['push'](_0x52b13e['shift']());
        } catch (_0x1a2fb0) {
            _0x52b13e['push'](_0x52b13e['shift']());
        }
    }
}(_0x115d, 0x19716));
const {
    db,
    dbQuery
} = require(_0x5cfa73(0x18c));
require('dotenv')[_0x5cfa73(0x171)]();

function _0x115d() {
    const _0x571843 = ['hosting', 'caption', 'log', 'config', 'SELECT\x20webhook\x20FROM\x20numbers\x20WHERE\x20body\x20=\x20\x27', '\x20LIMIT\x201', '72uhzQvj', 'catch', 'TYPE_SERVER', 'webhook', '\x27\x20LIMIT\x201', 'toString', '340236FlIvvR', 'user', '63PMWTPH', 'base64', 'buttonsResponseMessage', 'sendMessage', 'listResponseMessage', 'selectedDisplayText', '52248NAdKQu', 'data', 'toLowerCase', 'remoteJid', 'concat', 'keys', '165830qEylSh', 'key', 'application/json;\x20charset=utf-8', 'text', '../../database/index', 'post', 'conversation', 'messageContextInfo', '10qhCpup', 'stringify', 'message', 'imageMessage', 'image', 'messages', '@adiwajshing/baileys', 'length', 'extendedTextMessage', 'status@broadcast', '18BCSyWG', 'videoMessage', 'title', 'join', 'env', '87sBIuxi', 'axios', '\x22\x20AND\x20device\x20=\x20', '175714YPUIkt', '13874ZCdauK', '1495386mZaOPq', 'split', '25044UvZqlD'];
    _0x115d = function() {
        return _0x571843;
    };
    return _0x115d();
}
const {
    default: makeWASocket,
    downloadContentFromMessage
} = require(_0x5cfa73(0x15d)), axios = require(_0x5cfa73(0x167)), fs = require('fs');
async function removeForbiddenCharacters(_0x31ebaa) {
    const _0x43d154 = _0x5cfa73;
    let _0x69c0d5 = ['/', '?', '&', '=', '\x22'];
    for (let _0x36bfba of _0x69c0d5) {
        _0x31ebaa = _0x31ebaa[_0x43d154(0x16c)](_0x36bfba)[_0x43d154(0x164)]('');
    }
    return _0x31ebaa;
}


const autoReply = async (req, res) => {
    const user = _0x5cfa73;
    try {
        if (!req[user(0x15c)]) return;
        req = req['messages'][0x0];
        if (req[user(0x189)]['remoteJid'] === user(0x160)) return;
        const _0x1b907c = Object[user(0x187)](req['message'] || {})[0x0],
            _0x33912c = _0x1b907c === user(0x18e) && req[user(0x159)][user(0x18e)] ? req['message'][user(0x18e)] : _0x1b907c == 'imageMessage' && req[user(0x159)][user(0x15a)][user(0x16f)] ? req[user(0x159)][user(0x15a)][user(0x16f)] : _0x1b907c == 'videoMessage' && req[user(0x159)]['videoMessage']['caption'] ? req['message'][user(0x162)][user(0x16f)] : _0x1b907c == user(0x15f) && req[user(0x159)]['extendedTextMessage'][user(0x18b)] ? req[user(0x159)][user(0x15f)]['text'] : _0x1b907c == user(0x18f) && req[user(0x159)]['listResponseMessage']?.[user(0x163)] ? req[user(0x159)][user(0x180)][user(0x163)] : _0x1b907c == user(0x18f) ? req[user(0x159)][user(0x17e)][user(0x181)] : '',
            _0x16384e = _0x33912c[user(0x184)](),
            _0x4ff52a = await removeForbiddenCharacters(_0x16384e),
            _0x4efd90 = req[user(0x189)][user(0x185)][user(0x16c)]('@')[0x0];
        let _0x2a76d5;

        if (_0x1b907c === user(0x15a)) {
            const _0x4d9312 = await downloadContentFromMessage(req['message'][user(0x15a)], user(0x15b));
            let _0x38e67d = Buffer['from']([]);
            for await (const _0x22bad4 of _0x4d9312) {
                _0x38e67d = Buffer[user(0x186)]([_0x38e67d, _0x22bad4]);
            }
            _0x2a76d5 = _0x38e67d[user(0x179)](user(0x17d));
        } else urlImage = null;
        if (req[user(0x189)]['fromMe'] === !![]) return;
        let _0x5071c8;
        const raw_keyword = await dbQuery('SELECT\x20*\x20FROM\x20autoreplies\x20WHERE\x20keyword\x20=\x20\x22' + _0x4ff52a + user(0x168) + res['user']['id'][user(0x16c)](':')[0x0] + user(0x173));
        if (raw_keyword[user(0x15e)] === 0x0) {
            const _0x153cd7 = res[user(0x17b)]['id'][user(0x16c)](':')[0x0];
            0x0;
            const _0x4a591f = await dbQuery(user(0x172) + _0x153cd7 + user(0x178)),
                _0x4dd165 = _0x4a591f[0x0][user(0x177)];
            if (_0x4dd165 === null) return;
            const _0x516db3 = await sendWebhook({
                'command': _0x16384e,
                'bufferImage': _0x2a76d5,
                'from': _0x4efd90,
                'url': _0x4dd165
            });
            console.log("Not in Auto_Reply")
            if (_0x516db3 === ![]) return;
            _0x5071c8 = JSON['stringify'](_0x516db3);
        } else {
            _0x5071c8 = process[user(0x165)][user(0x176)] === user(0x16e) ? raw_keyword[0x0]['reply'] : JSON[user(0x191)](raw_keyword[0x0]['reply']);
            console.log({_0x5071c8})
            var _0x5071c88 = JSON['parse'](_0x5071c8);
            console.log("Auto_Reply")
            await res[user(0x17f)](req[user(0x189)][user(0x185)], JSON['parse'](_0x5071c88))[user(0x175)]
            (_0x1d267f => {console.log(_0x1d267f)});
        }
    } catch (error) {
        console.log(error);
    }
};
async function sendWebhook({
    command: _0x10c729,
    bufferImage: _0xd4991,
    from: _0x5d0d53,
    url: _0x25b380
}) {
    const _0x13b2cb = _0x5cfa73;
    try {
        const _0x41a295 = {
                'message': _0x10c729,
                'bufferImage': _0xd4991,
                'from': _0x5d0d53
            },
            _0x84fef7 = {
                'Content-Type': _0x13b2cb(0x18a)
            },
            _0x1faf34 = await axios[_0x13b2cb(0x18d)](_0x25b380, _0x41a295, _0x84fef7)['catch'](() => {
                return ![];
            });
        return _0x1faf34[_0x13b2cb(0x183)];
    } catch (_0x197f85) {
        return console['log'](_0x197f85), ![];
    }
}

function _0x248b(_0x2c5125, _0x20f204) {
    const _0x115dd0 = _0x115d();
    return _0x248b = function(_0x248b10, _0x42e386) {
        _0x248b10 = _0x248b10 - 0x159;
        let _0x228676 = _0x115dd0[_0x248b10];
        return _0x228676;
    }, _0x248b(_0x2c5125, _0x20f204);
}
module['exports'] = {
    'autoReply': autoReply
};
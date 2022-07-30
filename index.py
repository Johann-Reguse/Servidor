
from flask import Flask, request, jsonify

app = Flask(__name__)

livros = [
    {"id": 1, "name": "Thailand", "capital": "Bangkok", "area": 513120},
    {"id": 2, "name": "Australia", "capital": "Canberra", "area": 7617930},
    {"id": 3, "name": "Egypt", "capital": "Cairo", "area": 1010408},
]

def _find_next_id():
    return max(livros["id"] for livros in livros) + 1

@app.get("/livros")
def get_livros():
    return jsonify(livros)

@app.post("/inserir")
def add_livros():
    if request.is_json:
        livros = request.get_json()
        livros["id"] = _find_next_id()
        livros.append(livros)
        return livros, 201
    return {"error": "Request must be JSON"}, 415


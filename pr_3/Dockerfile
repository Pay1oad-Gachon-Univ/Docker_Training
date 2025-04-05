FROM python:3.10-slim

# 작업 디렉토리 설정
WORKDIR /app

# 필요한 파일 복사
COPY app.py .
COPY requirements.txt .

# 의존성 설치
RUN pip install --no-cache-dir -r requirements.txt

# 포트 개방
EXPOSE 8080

# 플라스크 앱 실행
CMD ["python", "app.py"]

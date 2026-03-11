import React, { useState, useEffect } from "react";
import { View, Text } from "react-native";

interface TypingTextProps {
  texts: string[];
  className?: string;
}

export default function TypingText({ texts, className = "" }: TypingTextProps) {
  const [displayText, setDisplayText] = useState("");
  const [textIndex, setTextIndex] = useState(0);
  const [charIndex, setCharIndex] = useState(0);
  const [isDeleting, setIsDeleting] = useState(false);

  useEffect(() => {
    const currentText = texts[textIndex];
    const speed = isDeleting ? 40 : 80;

    if (!isDeleting && charIndex === currentText.length) {
      const timeout = setTimeout(() => setIsDeleting(true), 2000);
      return () => clearTimeout(timeout);
    }

    if (isDeleting && charIndex === 0) {
      setIsDeleting(false);
      setTextIndex((prev) => (prev + 1) % texts.length);
      return;
    }

    const timeout = setTimeout(() => {
      setCharIndex((prev) => prev + (isDeleting ? -1 : 1));
      setDisplayText(currentText.substring(0, charIndex + (isDeleting ? -1 : 1)));
    }, speed);

    return () => clearTimeout(timeout);
  }, [charIndex, isDeleting, textIndex, texts]);

  return (
    <View className="flex-row items-center justify-center">
      <Text className={className}>{displayText}</Text>
      <View className="typing-cursor" />
    </View>
  );
}
